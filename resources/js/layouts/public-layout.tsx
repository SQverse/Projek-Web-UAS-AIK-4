import { type Kelompok, type SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { type PropsWithChildren } from 'react';

interface PublicLayoutProps {
    /** Mode aktif untuk menandai toggle (dewasa/anak). */
    activeKategori?: 'dewasa' | 'anak';
}

/**
 * Kerangka halaman publik + header identitas wajib (F-08).
 * Tampilan minimal — dirapikan pada tahap frontend.
 */
export default function PublicLayout({ activeKategori, children }: PropsWithChildren<PublicLayoutProps>) {
    const { kelompok } = usePage<SharedData>().props;

    return (
        <div className="min-h-screen bg-neutral-50 text-neutral-900 dark:bg-neutral-950 dark:text-neutral-100">
            <IdentitasHeader kelompok={kelompok} activeKategori={activeKategori} />
            <main className="mx-auto w-full max-w-5xl px-4 py-6">{children}</main>
            <footer className="mx-auto w-full max-w-5xl px-4 py-8 text-center text-xs text-neutral-500">
                Sumber konten: Himpunan Putusan Tarjih (HPT) Muhammadiyah.
            </footer>
        </div>
    );
}

function IdentitasHeader({ kelompok, activeKategori }: { kelompok: Kelompok | null; activeKategori?: 'dewasa' | 'anak' }) {
    return (
        <header className="border-b border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-900">
            <div className="mx-auto flex w-full max-w-5xl flex-col gap-2 px-4 py-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <Link href="/" className="text-lg font-semibold">
                        Tuntunan Tata Cara Sholat
                    </Link>
                    {kelompok && (
                        <p className="text-xs text-neutral-500">
                            {kelompok.nama_kelompok} · {kelompok.prodi} · {kelompok.mata_kuliah} · {kelompok.dosen}
                        </p>
                    )}
                </div>
                <nav className="flex gap-2 text-sm">
                    <ModeLink slug="dewasa" label="Dewasa" active={activeKategori === 'dewasa'} />
                    <ModeLink slug="anak" label="Anak-anak" active={activeKategori === 'anak'} />
                </nav>
            </div>
        </header>
    );
}

function ModeLink({ slug, label, active }: { slug: string; label: string; active: boolean }) {
    return (
        <Link
            href={`/${slug}`}
            className={
                'rounded-md px-3 py-1.5 font-medium transition ' +
                (active
                    ? 'bg-neutral-900 text-white dark:bg-white dark:text-neutral-900'
                    : 'bg-neutral-100 text-neutral-700 hover:bg-neutral-200 dark:bg-neutral-800 dark:text-neutral-300')
            }
        >
            {label}
        </Link>
    );
}
