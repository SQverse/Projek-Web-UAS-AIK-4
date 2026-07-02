import PublicLayout from '@/layouts/public-layout';
import { type Bacaan, type Gerakan, type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';
import { ChevronLeft, ChevronRight, PlayCircle } from 'lucide-react';

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
                <span className="text-sm font-medium text-emerald-700 dark:text-emerald-400">
                    Langkah {gerakan.urutan} dari {daftar.length}
                </span>
                <h1 className="mt-1 text-2xl font-bold sm:text-3xl">{gerakan.nama}</h1>
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
                <a
                    href={gerakan.video_url}
                    target="_blank"
                    rel="noreferrer"
                    className="mb-6 inline-flex items-center gap-2 rounded-full bg-red-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-700"
                >
                    <PlayCircle className="size-4" /> Tonton Video
                </a>
            )}

            <div className="space-y-5">
                {bacaanList.map((bacaan, i) => (
                    <BacaanCard key={i} bacaan={bacaan} />
                ))}
                {bacaanList.length === 0 && (
                    <p className="rounded-2xl border border-dashed border-stone-300 p-6 text-center text-sm text-stone-500 dark:border-stone-700">
                        Gerakan ini tidak memiliki bacaan khusus.
                    </p>
                )}
            </div>

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

function BacaanCard({ bacaan }: { bacaan: Bacaan }) {
    return (
        <article className="rounded-2xl border border-stone-200 bg-white p-5 sm:p-6 dark:border-stone-800 dark:bg-stone-900">
            {bacaan.judul && (
                <h3 className="mb-4 inline-block rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">
                    {bacaan.judul}
                </h3>
            )}
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
            {bacaan.audio_url && (
                <audio controls preload="none" className="mt-4 w-full">
                    <source src={bacaan.audio_url} type="audio/mpeg" />
                </audio>
            )}
            {bacaan.sumber && <p className="mt-4 text-xs text-stone-400">Sumber: {bacaan.sumber}</p>}
        </article>
    );
}
