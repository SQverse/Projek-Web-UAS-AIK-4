import AppLayout from '@/layouts/app-layout';
import { type Bacaan, type BreadcrumbItem, type Gerakan } from '@/types';
import { Head, Link, useForm } from '@inertiajs/react';
import { type FormEvent } from 'react';

interface Props {
    gerakan: Pick<Gerakan, 'id' | 'nama' | 'slug'>;
    bacaan: Bacaan | null;
}

export default function BacaanForm({ gerakan, bacaan }: Props) {
    const editing = bacaan !== null;
    const breadcrumbs: BreadcrumbItem[] = [
        { title: 'Admin — Gerakan', href: '/admin/gerakan' },
        { title: gerakan.nama, href: `/admin/gerakan/${gerakan.id}/edit` },
        { title: editing ? 'Edit Bacaan' : 'Tambah Bacaan', href: '#' },
    ];

    const { data, setData, post, put, processing, errors } = useForm({
        urutan: bacaan?.urutan ?? 1,
        judul: bacaan?.judul ?? '',
        teks_arab: bacaan?.teks_arab ?? '',
        teks_latin: bacaan?.teks_latin ?? '',
        terjemahan: bacaan?.terjemahan ?? '',
        audio_url: bacaan?.audio_url ?? '',
        sumber: bacaan?.sumber ?? '',
    });

    function submit(e: FormEvent) {
        e.preventDefault();
        if (editing) {
            put(`/admin/bacaan/${bacaan!.id}`);
        } else {
            post(`/admin/gerakan/${gerakan.id}/bacaan`);
        }
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title={editing ? 'Edit Bacaan' : 'Tambah Bacaan'} />
            <div className="max-w-2xl p-4">
                <h1 className="mb-1 text-lg font-semibold">{editing ? 'Edit' : 'Tambah'} Bacaan</h1>
                <p className="mb-4 text-sm text-neutral-500">Gerakan: {gerakan.nama}</p>

                <form onSubmit={submit} className="space-y-4">
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
                        <Field label="Judul" error={errors.judul}>
                            <input
                                value={data.judul}
                                onChange={(e) => setData('judul', e.target.value)}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                    </div>

                    <Field label="Teks Arab" error={errors.teks_arab}>
                        <textarea
                            dir="rtl"
                            lang="ar"
                            value={data.teks_arab}
                            onChange={(e) => setData('teks_arab', e.target.value)}
                            rows={3}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 text-right text-xl dark:border-neutral-700"
                        />
                    </Field>

                    <Field label="Transliterasi Latin" error={errors.teks_latin}>
                        <textarea
                            value={data.teks_latin}
                            onChange={(e) => setData('teks_latin', e.target.value)}
                            rows={2}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                        />
                    </Field>

                    <Field label="Terjemahan" error={errors.terjemahan}>
                        <textarea
                            value={data.terjemahan}
                            onChange={(e) => setData('terjemahan', e.target.value)}
                            rows={3}
                            className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                        />
                    </Field>

                    <div className="grid grid-cols-2 gap-4">
                        <Field label="URL Audio (MP3)" error={errors.audio_url}>
                            <input
                                value={data.audio_url}
                                onChange={(e) => setData('audio_url', e.target.value)}
                                className="w-full rounded-md border border-neutral-300 bg-transparent px-3 py-2 dark:border-neutral-700"
                            />
                        </Field>
                        <Field label="Sumber" error={errors.sumber}>
                            <input
                                value={data.sumber}
                                onChange={(e) => setData('sumber', e.target.value)}
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
                        <Link href={`/admin/gerakan/${gerakan.id}/edit`} className="rounded-md border px-4 py-2 text-sm">
                            Batal
                        </Link>
                    </div>
                </form>
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
