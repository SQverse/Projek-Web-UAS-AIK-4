import PublicLayout from '@/layouts/public-layout';
import { type Gerakan, type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';

interface Props {
    kategori: Pick<Kategori, 'slug' | 'nama' | 'deskripsi'>;
    gerakanList: Gerakan[];
}

export default function Daftar({ kategori, gerakanList }: Props) {
    return (
        <PublicLayout activeKategori={kategori.slug}>
            <Head title={`Daftar Gerakan — ${kategori.nama}`} />
            <h1 className="mb-1 text-xl font-bold">Daftar Gerakan Sholat</h1>
            <p className="mb-6 text-sm text-neutral-500">Mode {kategori.nama}. Klik gerakan untuk melihat detail dan bacaan.</p>

            <ol className="space-y-3">
                {gerakanList.map((gerakan) => (
                    <li key={gerakan.id}>
                        <Link
                            href={`/${kategori.slug}/${gerakan.slug}`}
                            className="flex items-center gap-4 rounded-lg border border-neutral-200 bg-white p-4 transition hover:border-neutral-400 dark:border-neutral-800 dark:bg-neutral-900"
                        >
                            <span className="flex size-9 shrink-0 items-center justify-center rounded-full bg-neutral-900 text-sm font-semibold text-white dark:bg-white dark:text-neutral-900">
                                {gerakan.urutan}
                            </span>
                            <span className="flex-1">
                                <span className="block font-medium">{gerakan.nama}</span>
                                {gerakan.deskripsi && <span className="line-clamp-1 text-sm text-neutral-500">{gerakan.deskripsi}</span>}
                            </span>
                            {(gerakan.bacaan_count ?? 0) > 0 && (
                                <span className="shrink-0 text-xs text-neutral-400">{gerakan.bacaan_count} bacaan</span>
                            )}
                        </Link>
                    </li>
                ))}
            </ol>
        </PublicLayout>
    );
}
