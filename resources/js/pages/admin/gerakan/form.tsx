import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem, type Gerakan, type Kategori } from '@/types';
import { Head, Link, router, useForm } from '@inertiajs/react';
import { type FormEvent } from 'react';

interface Props {
    gerakan: Gerakan | null;
    kategoriList: Pick<Kategori, 'id' | 'slug' | 'nama'>[];
}

export default function GerakanForm({ gerakan, kategoriList }: Props) {
    const editing = gerakan !== null;
    const breadcrumbs: BreadcrumbItem[] = [
        { title: 'Admin — Gerakan', href: '/admin/gerakan' },
        { title: editing ? 'Edit' : 'Tambah', href: '#' },
    ];

    const { data, setData, post, put, processing, errors } = useForm({
        kategori_id: gerakan?.kategori_id ?? kategoriList[0]?.id ?? '',
        urutan: gerakan?.urutan ?? 1,
        nama: gerakan?.nama ?? '',
        slug: gerakan?.slug ?? '',
        deskripsi: gerakan?.deskripsi ?? '',
        gambar_url: gerakan?.gambar_url ?? '',
        video_url: gerakan?.video_url ?? '',
    });

    function submit(e: FormEvent) {
        e.preventDefault();
        if (editing) {
            put(`/admin/gerakan/${gerakan!.id}`);
        } else {
            post('/admin/gerakan');
        }
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title={editing ? 'Edit Gerakan' : 'Tambah Gerakan'} />
            <div className="max-w-2xl p-4">
                <h1 className="mb-4 text-lg font-semibold">{editing ? 'Edit' : 'Tambah'} Gerakan</h1>

                <form onSubmit={submit} className="space-y-4">
                    <Field label="Mode" error={errors.kategori_id}>
                        <select
                            value={data.kategori_id}
                            onChange={(e) => setData('kategori_id', Number(e.target.value))}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                        >
                            {kategoriList.map((k) => (
                                <option key={k.id} value={k.id}>
                                    {k.nama}
                                </option>
                            ))}
                        </select>
                    </Field>

                    <div className="grid grid-cols-2 gap-4">
                        <Field label="Urutan" error={errors.urutan}>
                            <input
                                type="number"
                                min={1}
                                value={data.urutan}
                                onChange={(e) => setData('urutan', Number(e.target.value))}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                        <Field label="Slug" error={errors.slug}>
                            <input
                                value={data.slug}
                                onChange={(e) => setData('slug', e.target.value)}
                                placeholder="mis. rukuk"
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                    </div>

                    <Field label="Nama Gerakan" error={errors.nama}>
                        <input
                            value={data.nama}
                            onChange={(e) => setData('nama', e.target.value)}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                        />
                    </Field>

                    <Field label="Deskripsi" error={errors.deskripsi}>
                        <textarea
                            value={data.deskripsi}
                            onChange={(e) => setData('deskripsi', e.target.value)}
                            rows={3}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                        />
                    </Field>

                    <div className="grid grid-cols-2 gap-4">
                        <Field label="URL Gambar" error={errors.gambar_url}>
                            <input
                                value={data.gambar_url}
                                onChange={(e) => setData('gambar_url', e.target.value)}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                        <Field label="URL Video" error={errors.video_url}>
                            <input
                                value={data.video_url}
                                onChange={(e) => setData('video_url', e.target.value)}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                    </div>

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

                {editing && gerakan?.bacaan && (
                    <section className="mt-8">
                        <div className="mb-3 flex items-center justify-between">
                            <h2 className="font-semibold">Bacaan ({gerakan.bacaan.length})</h2>
                            <Link href={`/admin/gerakan/${gerakan.id}/bacaan/create`} className="rounded-md border px-3 py-1.5 text-sm">
                                + Bacaan
                            </Link>
                        </div>
                        <ul className="space-y-2">
                            {gerakan.bacaan.map((b) => (
                                <li
                                    key={b.id}
                                    className="flex items-center justify-between rounded-md border border-neutral-200 p-3 text-sm dark:border-neutral-800"
                                >
                                    <span>
                                        <span className="font-medium">
                                            {b.urutan}. {b.judul ?? '(tanpa judul)'}
                                        </span>
                                        <span className="ml-2 text-neutral-400" dir="rtl">
                                            {b.teks_arab?.slice(0, 40)}
                                        </span>
                                    </span>
                                    <span className="flex gap-3">
                                        <Link href={`/admin/bacaan/${b.id}/edit`} className="text-blue-600 hover:underline">
                                            Edit
                                        </Link>
                                        <button
                                            onClick={() => {
                                                if (confirm('Hapus bacaan ini?')) router.delete(`/admin/bacaan/${b.id}`);
                                            }}
                                            className="text-red-600 hover:underline"
                                        >
                                            Hapus
                                        </button>
                                    </span>
                                </li>
                            ))}
                        </ul>
                    </section>
                )}
            </div>
        </AppLayout>
    );
}

function Field({ label, error, children }: { label: string; error?: string; children: React.ReactNode }) {
    return (
        <label className="block">
            <span className="mb-1 block text-sm font-medium">{label}</span>
            {children}
            {error && <span className="mt-1 block text-sm text-red-600">{error}</span>}
        </label>
    );
}
