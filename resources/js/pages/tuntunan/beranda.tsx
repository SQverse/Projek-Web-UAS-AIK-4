import PublicLayout from '@/layouts/public-layout';
import { type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';

interface Props {
    kategoriList: Kategori[];
}

export default function Beranda({ kategoriList }: Props) {
    return (
        <PublicLayout>
            <Head title="Beranda" />
            <section className="mb-8 text-center">
                <h1 className="text-2xl font-bold sm:text-3xl">Tuntunan Tata Cara Sholat</h1>
                <p className="mt-2 text-neutral-600 dark:text-neutral-400">
                    Sesuai Sunnah Rasulullah ﷺ — rujukan HPT Muhammadiyah. Pilih mode penyajian:
                </p>
            </section>

            <div className="grid gap-4 sm:grid-cols-2">
                {kategoriList.map((kategori) => (
                    <Link
                        key={kategori.id}
                        href={`/${kategori.slug}`}
                        className="rounded-xl border border-neutral-200 bg-white p-6 transition hover:border-neutral-400 hover:shadow-sm dark:border-neutral-800 dark:bg-neutral-900"
                    >
                        <h2 className="text-lg font-semibold">Mode {kategori.nama}</h2>
                        {kategori.deskripsi && <p className="mt-1 text-sm text-neutral-500">{kategori.deskripsi}</p>}
                        <p className="mt-3 text-sm font-medium text-neutral-700 dark:text-neutral-300">{kategori.gerakan_count ?? 0} gerakan →</p>
                    </Link>
                ))}
            </div>
        </PublicLayout>
    );
}
