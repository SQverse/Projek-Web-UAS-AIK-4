import { cn } from '@/lib/utils';
import { type Bacaan } from '@/types';
import { router } from '@inertiajs/react';
import { Pause, Play, StepForward } from 'lucide-react';
import { useCallback, useEffect, useRef, useState } from 'react';

interface Props {
    bacaanList: Bacaan[];
    /** Base path kategori, mis. "/dewasa". */
    base: string;
    /** Slug gerakan berikutnya untuk auto-lanjut, atau null. */
    next: string | null;
    /** Mulai autoplay otomatis saat halaman dimuat (dari ?autoplay=1). */
    autostart?: boolean;
}

/**
 * Daftar bacaan dengan pemutar audio (F-03) dan autoplay berurutan (F-06).
 * Autoplay memutar tiap bacaan berurutan, lalu berpindah ke gerakan
 * berikutnya secara otomatis (?autoplay=1).
 */
export default function BacaanList({ bacaanList, base, next, autostart = false }: Props) {
    const audioRef = useRef<HTMLAudioElement | null>(null);
    const playingRef = useRef<number | null>(null);
    const sequenceRef = useRef(false);
    const [playing, setPlaying] = useState<number | null>(null);
    const [sequence, setSequence] = useState(false);
    const [blocked, setBlocked] = useState(false);

    const stop = useCallback(() => {
        audioRef.current?.pause();
        playingRef.current = null;
        sequenceRef.current = false;
        setPlaying(null);
        setSequence(false);
    }, []);

    const playAt = useCallback(
        (index: number, asSequence: boolean) => {
            const audio = audioRef.current;
            const bacaan = bacaanList[index];
            if (!audio || !bacaan?.audio_url) return;
            audio.src = bacaan.audio_url;
            playingRef.current = index;
            sequenceRef.current = asSequence;
            setPlaying(index);
            setSequence(asSequence);
            setBlocked(false);
            audio.play().catch(() => {
                // Autoplay diblokir browser (butuh interaksi) — minta ketukan.
                playingRef.current = null;
                setPlaying(null);
                if (asSequence) setBlocked(true);
            });
        },
        [bacaanList],
    );

    // Lanjut item berikut dalam sequence, atau pindah ke gerakan berikutnya.
    const advance = useCallback(() => {
        const current = playingRef.current;
        if (current === null) return;
        const nextIndex = current + 1;
        if (nextIndex < bacaanList.length) {
            playAt(nextIndex, true);
            return;
        }
        // Selesai satu gerakan — lanjut ke gerakan berikutnya bila ada.
        sequenceRef.current = false;
        setSequence(false);
        playingRef.current = null;
        setPlaying(null);
        if (next) {
            router.visit(`${base}/${next}?autoplay=1`);
        }
    }, [bacaanList.length, next, base, playAt]);

    // Dipanggil saat audio selesai / gagal dimuat.
    const onAudioDone = useCallback(() => {
        if (sequenceRef.current) {
            advance();
        } else {
            playingRef.current = null;
            setPlaying(null);
        }
    }, [advance]);

    // Auto-mulai bila datang dari autoplay gerakan sebelumnya.
    useEffect(() => {
        if (autostart) playAt(0, true);
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    const hasAudio = bacaanList.some((b) => b.audio_url);

    return (
        <div>
            <audio ref={audioRef} preload="none" onEnded={onAudioDone} onError={onAudioDone} />

            {hasAudio && (
                <div className="mb-5 flex flex-wrap items-center gap-3">
                    {sequence ? (
                        <button
                            onClick={stop}
                            className="inline-flex items-center gap-2 rounded-full bg-emerald-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-emerald-700"
                        >
                            <Pause className="size-4" /> Hentikan
                        </button>
                    ) : (
                        <button
                            onClick={() => playAt(0, true)}
                            className="inline-flex items-center gap-2 rounded-full bg-emerald-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-emerald-700"
                        >
                            <Play className="size-4" /> Putar Semua
                        </button>
                    )}
                    {next && (
                        <span className="inline-flex items-center gap-1 text-xs text-stone-500">
                            <StepForward className="size-3.5" /> Lanjut otomatis ke gerakan berikutnya
                        </span>
                    )}
                </div>
            )}

            {blocked && (
                <button
                    onClick={() => playAt(0, true)}
                    className="mb-5 w-full rounded-xl border border-amber-300 bg-amber-50 px-4 py-3 text-sm font-medium text-amber-800 dark:border-amber-800 dark:bg-amber-950/30 dark:text-amber-300"
                >
                    Ketuk untuk melanjutkan autoplay
                </button>
            )}

            <div className="space-y-5">
                {bacaanList.map((bacaan, i) => (
                    <BacaanCard key={i} bacaan={bacaan} active={playing === i} onToggle={() => (playing === i ? stop() : playAt(i, false))} />
                ))}
                {bacaanList.length === 0 && (
                    <p className="rounded-2xl border border-dashed border-stone-300 p-6 text-center text-sm text-stone-500 dark:border-stone-700">
                        Gerakan ini tidak memiliki bacaan khusus.
                    </p>
                )}
            </div>
        </div>
    );
}

function BacaanCard({ bacaan, active, onToggle }: { bacaan: Bacaan; active: boolean; onToggle: () => void }) {
    return (
        <article
            className={cn(
                'rounded-2xl border bg-white p-5 transition sm:p-6 dark:bg-stone-900',
                active ? 'border-emerald-400 ring-2 ring-emerald-400/30 dark:border-emerald-600' : 'border-stone-200 dark:border-stone-800',
            )}
        >
            <div className="mb-4 flex items-center justify-between gap-3">
                {bacaan.judul ? (
                    <h3 className="inline-block rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">
                        {bacaan.judul}
                    </h3>
                ) : (
                    <span />
                )}
                {bacaan.audio_url && (
                    <button
                        onClick={onToggle}
                        aria-label={active ? 'Hentikan audio' : 'Putar audio'}
                        className="flex size-9 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-white transition hover:bg-emerald-700"
                    >
                        {active ? <Pause className="size-4" /> : <Play className="size-4" />}
                    </button>
                )}
            </div>

            {bacaan.teks_arab && (
                <p dir="rtl" lang="ar" className="font-arabic mb-4 text-right text-[1.9rem] leading-[2.4] sm:text-4xl sm:leading-[2.2]">
                    {bacaan.teks_arab}
                </p>
            )}
            {bacaan.teks_latin && (
                <p className="mb-2 border-l-2 border-emerald-200 pl-3 text-emerald-800/90 italic dark:border-emerald-900 dark:text-emerald-300/90">
                    {bacaan.teks_latin}
                </p>
            )}
            {bacaan.terjemahan && <p className="text-stone-600 dark:text-stone-400">{bacaan.terjemahan}</p>}
            {bacaan.sumber && <p className="mt-4 text-xs text-stone-400">Sumber: {bacaan.sumber}</p>}
        </article>
    );
}
