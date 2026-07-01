import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem, type Gerakan } from '@/types';
import { Head, Link, router } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [{ title: 'Admin — Gerakan', href: '/admin/gerakan' }];

interface Props {
    gerakanList: Gerakan[];
}

export default function GerakanIndex({ gerakanList }: Props) {
    function hapus(gerakan: Gerakan) {
        if (confirm(`Hapus gerakan "${gerakan.nama}"? Bacaan terkait ikut terhapus.`)) {
            router.delete(`/admin/gerakan/${gerakan.id}`);
        }
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Admin — Gerakan" />
            <div className="flex flex-col gap-4 p-4">
                <div className="flex items-center justify-between">
                    <h1 className="text-lg font-semibold">Manajemen Gerakan & Bacaan</h1>
                    <div className="flex gap-2">
                        <Link href="/admin/kelompok" className="rounded-md border px-3 py-1.5 text-sm">
                            Identitas Kelompok
                        </Link>
                        <Link
                            href="/admin/gerakan/create"
                            className="rounded-md bg-neutral-900 px-3 py-1.5 text-sm text-white dark:bg-white dark:text-neutral-900"
                        >
                            + Gerakan
                        </Link>
                    </div>
                </div>

                <div className="overflow-x-auto rounded-lg border border-neutral-200 dark:border-neutral-800">
                    <table className="w-full text-left text-sm">
                        <thead className="bg-neutral-50 text-neutral-500 dark:bg-neutral-900">
                            <tr>
                                <th className="px-3 py-2">#</th>
                                <th className="px-3 py-2">Mode</th>
                                <th className="px-3 py-2">Gerakan</th>
                                <th className="px-3 py-2">Bacaan</th>
                                <th className="px-3 py-2 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {gerakanList.map((gerakan) => (
                                <tr key={gerakan.id} className="border-t border-neutral-100 dark:border-neutral-800">
                                    <td className="px-3 py-2">{gerakan.urutan}</td>
                                    <td className="px-3 py-2 capitalize">{gerakan.kategori?.nama}</td>
                                    <td className="px-3 py-2 font-medium">{gerakan.nama}</td>
                                    <td className="px-3 py-2">{gerakan.bacaan_count ?? 0}</td>
                                    <td className="px-3 py-2 text-right">
                                        <Link href={`/admin/gerakan/${gerakan.id}/edit`} className="text-blue-600 hover:underline">
                                            Edit
                                        </Link>
                                        <button onClick={() => hapus(gerakan)} className="ml-3 text-red-600 hover:underline">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </AppLayout>
    );
}
