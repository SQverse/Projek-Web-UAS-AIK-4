import BacaanList from '@/components/bacaan-list';
import VideoDialog from '@/components/video-dialog';
import PublicLayout from '@/layouts/public-layout';
import { type Bacaan, type Gerakan, type Kategori } from '@/types';
import { Head, Link, router } from '@inertiajs/react';
import { ChevronLeft, ChevronRight } from 'lucide-react';
import { useEffect } from 'react';

interface Props {
    kategori: Pick<Kategori, 'slug' | 'nama'>;
    gerakan: Pick<Gerakan, 'slug' | 'urutan' | 'nama' | 'deskripsi' | 'gambar_url' | 'video_url'>;
    bacaanList: Bacaan[];
    daftar: Pick<Gerakan, 'slug' | 'urutan' | 'nama'>[];
    prev: string | null;
    next: string | null;
}

export default function Detail({ kategori, gerakan, bacaanList, daftar, prev, next }: Props) {
    const base = `/${kategori.slug}`;
    const autostart = typeof window !== 'undefined' && new URLSearchParams(window.location.search).get('autoplay') === '1';

    // Navigasi keyboard antar-gerakan (F-05).
    useEffect(() => {
        function onKey(e: KeyboardEvent) {
            if (e.target instanceof HTMLElement && ['INPUT', 'TEXTAREA', 'SELECT'].includes(e.target.tagName)) return;
            if (e.key === 'ArrowLeft' && prev) router.visit(`${base}/${prev}`);
            if (e.key === 'ArrowRight' && next) router.visit(`${base}/${next}`);
        }
        window.addEventListener('keydown', onKey);
        return () => window.removeEventListener('keydown', onKey);
    }, [base, prev, next]);

    return (
        <PublicLayout activeKategori={kategori.slug}>
            <Head title={gerakan.nama} />

            <nav className="mb-4 flex items-center gap-1 text-sm text-stone-500">
                <Link href={base} className="hover:text-emerald-700 hover:underline">
                    Daftar Gerakan
                </Link>
                <ChevronRight className="size-4" />
                <span className="text-stone-700 dark:text-stone-300">Gerakan {gerakan.urutan}</span>
            </nav>

            <header className="mb-6">
                <div className="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <span className="text-sm font-medium text-emerald-700 dark:text-emerald-400">
                            Langkah {gerakan.urutan} dari {daftar.length}
                        </span>
                        <h1 className="mt-1 text-2xl font-bold sm:text-3xl">{gerakan.nama}</h1>
                    </div>
                    {/* Klik/lompat ke gerakan mana pun. */}
                    <select
                        value={gerakan.slug}
                        onChange={(e) => router.visit(`${base}/${e.target.value}`)}
                        className="rounded-full border border-stone-300 bg-white px-4 py-2 text-sm dark:border-stone-700 dark:bg-stone-900"
                        aria-label="Lompat ke gerakan"
                    >
                        {daftar.map((g) => (
                            <option key={g.slug} value={g.slug}>
                                {g.urutan}. {g.nama}
                            </option>
                        ))}
                    </select>
                </div>
                {gerakan.deskripsi && <p className="mt-2 text-stone-600 dark:text-stone-400">{gerakan.deskripsi}</p>}
            </header>

            {gerakan.gambar_url && (
                <img
                    src={gerakan.gambar_url}
                    alt={gerakan.nama}
                    className="mb-6 aspect-video w-full rounded-2xl border border-stone-200 object-cover dark:border-stone-800"
                    onError={(e) => (e.currentTarget.style.display = 'none')}
                />
            )}

            {gerakan.video_url && (
                <div className="mb-6">
                    <VideoDialog url={gerakan.video_url} title={gerakan.nama} />
                </div>
            )}

            <BacaanList bacaanList={bacaanList} base={base} next={next} autostart={autostart} />

            <nav className="mt-10 flex items-center justify-between gap-3 border-t border-stone-200 pt-6 dark:border-stone-800">
                {prev ? (
                    <Link
                        href={`${base}/${prev}`}
                        className="inline-flex items-center gap-1.5 rounded-full border border-stone-300 px-4 py-2 text-sm font-medium transition hover:border-emerald-400 hover:text-emerald-700 dark:border-stone-700"
                    >
                        <ChevronLeft className="size-4" /> Sebelumnya
                    </Link>
                ) : (
                    <span />
                )}
                {next ? (
                    <Link
                        href={`${base}/${next}`}
                        className="inline-flex items-center gap-1.5 rounded-full bg-emerald-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-emerald-700"
                    >
                        Berikutnya <ChevronRight className="size-4" />
                    </Link>
                ) : (
                    <span />
                )}
            </nav>
        </PublicLayout>
    );
}
