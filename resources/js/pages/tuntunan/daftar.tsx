import PublicLayout from '@/layouts/public-layout';
import { type Gerakan, type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';
import { ChevronRight } from 'lucide-react';

interface Props {
    kategori: Pick<Kategori, 'slug' | 'nama' | 'deskripsi'>;
    gerakanList: Gerakan[];
}

export default function Daftar({ kategori, gerakanList }: Props) {
    return (
        <PublicLayout activeKategori={kategori.slug}>
            <Head title={`Daftar Gerakan — ${kategori.nama}`} />

            <div className="mb-8">
                <span className="inline-block rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">
                    Mode {kategori.nama}
                </span>
                <h1 className="mt-3 text-2xl font-bold sm:text-3xl">Daftar Gerakan Sholat</h1>
                <p className="mt-1 text-stone-500">Urut dari qiyam hingga salam. Ketuk gerakan untuk melihat bacaannya.</p>
            </div>

            <ol className="grid gap-3 sm:grid-cols-2">
                {gerakanList.map((gerakan) => (
                    <li key={gerakan.id}>
                        <Link
                            href={`/${kategori.slug}/${gerakan.slug}`}
                            className="group flex h-full items-center gap-4 rounded-2xl border border-stone-200 bg-white p-4 transition hover:-translate-y-0.5 hover:border-emerald-300 hover:shadow-md dark:border-stone-800 dark:bg-stone-900 dark:hover:border-emerald-800"
                        >
                            <span className="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-sm font-bold text-white">
                                {gerakan.urutan}
                            </span>
                            <span className="min-w-0 flex-1">
                                <span className="block truncate font-semibold">{gerakan.nama}</span>
                                {gerakan.deskripsi && <span className="line-clamp-1 text-sm text-stone-500">{gerakan.deskripsi}</span>}
                            </span>
                            {(gerakan.bacaan_count ?? 0) > 0 && (
                                <span className="hidden shrink-0 rounded-full bg-stone-100 px-2 py-0.5 text-xs text-stone-500 sm:inline dark:bg-stone-800">
                                    {gerakan.bacaan_count} bacaan
                                </span>
                            )}
                            <ChevronRight className="size-5 shrink-0 text-stone-300 transition group-hover:text-emerald-600" />
                        </Link>
                    </li>
                ))}
            </ol>
        </PublicLayout>
    );
}
