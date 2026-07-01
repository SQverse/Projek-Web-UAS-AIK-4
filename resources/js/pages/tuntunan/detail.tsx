import PublicLayout from '@/layouts/public-layout';
import { type Bacaan, type Gerakan, type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';

interface Props {
    kategori: Pick<Kategori, 'slug' | 'nama'>;
    gerakan: Pick<Gerakan, 'slug' | 'urutan' | 'nama' | 'deskripsi' | 'gambar_url' | 'video_url'>;
    bacaanList: Bacaan[];
    daftar: Pick<Gerakan, 'slug' | 'urutan' | 'nama'>[];
    prev: string | null;
    next: string | null;
}

export default function Detail({ kategori, gerakan, bacaanList, prev, next }: Props) {
    const base = `/${kategori.slug}`;

    return (
        <PublicLayout activeKategori={kategori.slug}>
            <Head title={gerakan.nama} />

            <div className="mb-4 text-sm text-neutral-500">
                <Link href={base} className="hover:underline">
                    Daftar Gerakan
                </Link>{' '}
                / Gerakan {gerakan.urutan}
            </div>

            <h1 className="text-xl font-bold">{gerakan.nama}</h1>
            {gerakan.deskripsi && <p className="mt-2 text-neutral-600 dark:text-neutral-400">{gerakan.deskripsi}</p>}

            {gerakan.gambar_url && (
                <img
                    src={gerakan.gambar_url}
                    alt={gerakan.nama}
                    className="mt-4 w-full rounded-xl border border-neutral-200 object-cover dark:border-neutral-800"
                    onError={(e) => (e.currentTarget.style.display = 'none')}
                />
            )}

            {gerakan.video_url && (
                <a
                    href={gerakan.video_url}
                    target="_blank"
                    rel="noreferrer"
                    className="mt-4 inline-block rounded-md bg-red-600 px-4 py-2 text-sm font-medium text-white"
                >
                    Tonton Video
                </a>
            )}

            <div className="mt-6 space-y-4">
                {bacaanList.map((bacaan, i) => (
                    <BacaanCard key={i} bacaan={bacaan} />
                ))}
                {bacaanList.length === 0 && (
                    <p className="rounded-lg border border-dashed border-neutral-300 p-4 text-sm text-neutral-500 dark:border-neutral-700">
                        Gerakan ini tidak memiliki bacaan khusus.
                    </p>
                )}
            </div>

            <nav className="mt-8 flex justify-between gap-4">
                {prev ? (
                    <Link href={`${base}/${prev}`} className="rounded-md border border-neutral-300 px-4 py-2 text-sm dark:border-neutral-700">
                        ← Sebelumnya
                    </Link>
                ) : (
                    <span />
                )}
                {next ? (
                    <Link href={`${base}/${next}`} className="rounded-md border border-neutral-300 px-4 py-2 text-sm dark:border-neutral-700">
                        Berikutnya →
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
        <article className="rounded-xl border border-neutral-200 bg-white p-5 dark:border-neutral-800 dark:bg-neutral-900">
            {bacaan.judul && <h3 className="mb-3 text-sm font-semibold text-neutral-500">{bacaan.judul}</h3>}
            {bacaan.teks_arab && (
                <p dir="rtl" lang="ar" className="mb-3 text-right text-2xl leading-loose">
                    {bacaan.teks_arab}
                </p>
            )}
            {bacaan.teks_latin && <p className="mb-2 text-neutral-700 italic dark:text-neutral-300">{bacaan.teks_latin}</p>}
            {bacaan.terjemahan && <p className="text-neutral-600 dark:text-neutral-400">{bacaan.terjemahan}</p>}
            {bacaan.audio_url && (
                <audio controls preload="none" className="mt-3 w-full">
                    <source src={bacaan.audio_url} type="audio/mpeg" />
                </audio>
            )}
            {bacaan.sumber && <p className="mt-3 text-xs text-neutral-400">Sumber: {bacaan.sumber}</p>}
        </article>
    );
}
