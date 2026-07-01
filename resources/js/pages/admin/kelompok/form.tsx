import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem, type Kelompok } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';
import { type FormEvent } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Admin — Gerakan', href: '/admin/gerakan' },
    { title: 'Identitas Kelompok', href: '/admin/kelompok' },
];

interface Props {
    kelompok: Kelompok;
}

export default function KelompokForm({ kelompok }: Props) {
    const { data, setData, put, processing, errors } = useForm({
        nama_kelompok: kelompok.nama_kelompok ?? '',
        prodi: kelompok.prodi ?? '',
        mata_kuliah: kelompok.mata_kuliah ?? '',
        dosen: kelompok.dosen ?? '',
        universitas: kelompok.universitas ?? '',
    });

    function submit(e: FormEvent) {
        e.preventDefault();
        put('/admin/kelompok');
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Identitas Kelompok" />
            <div className="max-w-2xl p-4">
                <h1 className="mb-1 text-lg font-semibold">Identitas Kelompok</h1>
                <p className="mb-4 text-sm text-neutral-500">Tampil pada header tiap halaman (F-08).</p>

                <form onSubmit={submit} className="space-y-4">
                    {(
                        [
                            ['nama_kelompok', 'Nama Kelompok'],
                            ['prodi', 'Program Studi'],
                            ['mata_kuliah', 'Mata Kuliah'],
                            ['dosen', 'Dosen Pengampu'],
                            ['universitas', 'Universitas'],
                        ] as const
                    ).map(([key, label]) => (
                        <label key={key} className="block">
                            <span className="mb-1 block text-sm font-medium">{label}</span>
                            <input
                                value={data[key]}
                                onChange={(e) => setData(key, e.target.value)}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                            {errors[key] && <span className="mt-1 block text-sm text-red-600">{errors[key]}</span>}
                        </label>
                    ))}

                    <div className="flex gap-2">
                        <button
                            type="submit"
                            disabled={processing}
                            className="rounded-md bg-neutral-900 px-4 py-2 text-sm text-white disabled:opacity-50 dark:bg-white dark:text-neutral-900"
                        >
                            Simpan
                        </button>
                        <Link href="/admin/gerakan" className="rounded-md border px-4 py-2 text-sm">
                            Batal
                        </Link>
                    </div>
                </form>
            </div>
        </AppLayout>
    );
}
