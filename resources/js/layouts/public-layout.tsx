import { cn } from '@/lib/utils';
import { type Kelompok, type SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { BookOpen } from 'lucide-react';
import { type PropsWithChildren } from 'react';

interface PublicLayoutProps {
    /** Mode aktif untuk menandai toggle (dewasa/anak). */
    activeKategori?: 'dewasa' | 'anak';
}

/**
 * Kerangka halaman publik + header identitas wajib (F-08).
 */
export default function PublicLayout({ activeKategori, children }: PropsWithChildren<PublicLayoutProps>) {
    const { kelompok } = usePage<SharedData>().props;

    return (
        <div className="flex min-h-screen flex-col bg-stone-50 text-stone-900 dark:bg-stone-950 dark:text-stone-100">
            <IdentitasHeader kelompok={kelompok} activeKategori={activeKategori} />
            <main className="mx-auto w-full max-w-5xl flex-1 px-4 py-8 sm:px-6 sm:py-12">{children}</main>
            <SiteFooter kelompok={kelompok} />
        </div>
    );
}

function IdentitasHeader({ kelompok, activeKategori }: { kelompok: Kelompok | null; activeKategori?: 'dewasa' | 'anak' }) {
    return (
        <header className="sticky top-0 z-40 border-b border-stone-200/70 bg-stone-50/85 backdrop-blur-md dark:border-stone-800 dark:bg-stone-950/85">
            <div className="mx-auto flex w-full max-w-5xl flex-col gap-3 px-4 py-3 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <Link href="/" className="flex items-center gap-3">
                    <span className="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white shadow-sm">
                        <BookOpen className="size-5" />
                    </span>
                    <span className="leading-tight">
                        <span className="block text-sm font-semibold sm:text-base">Tuntunan Tata Cara Sholat</span>
                        <span className="block text-xs text-stone-500">Sesuai Sunnah — HPT Muhammadiyah</span>
                    </span>
                </Link>

                <div className="flex items-center gap-1 self-start rounded-full border border-stone-200 bg-white p-1 text-sm sm:self-auto dark:border-stone-800 dark:bg-stone-900">
                    <ModeLink slug="dewasa" label="Dewasa" active={activeKategori === 'dewasa'} />
                    <ModeLink slug="anak" label="Anak-anak" active={activeKategori === 'anak'} />
                </div>
            </div>

            {kelompok && (
                <div className="border-t border-stone-200/70 bg-white/50 dark:border-stone-800 dark:bg-stone-900/40">
                    <p className="mx-auto w-full max-w-5xl px-4 py-1.5 text-center text-[11px] text-stone-500 sm:px-6">
                        {kelompok.nama_kelompok} · {kelompok.prodi} · {kelompok.mata_kuliah} · {kelompok.dosen}
                    </p>
                </div>
            )}
        </header>
    );
}

function ModeLink({ slug, label, active }: { slug: string; label: string; active: boolean }) {
    return (
        <Link
            href={`/${slug}`}
            className={cn(
                'rounded-full px-3.5 py-1.5 font-medium transition',
                active ? 'bg-emerald-600 text-white shadow-sm' : 'text-stone-600 hover:bg-stone-100 dark:text-stone-300 dark:hover:bg-stone-800',
            )}
        >
            {label}
        </Link>
    );
}

function SiteFooter({ kelompok }: { kelompok: Kelompok | null }) {
    return (
        <footer className="border-t border-stone-200 bg-white dark:border-stone-800 dark:bg-stone-900">
            <div className="mx-auto w-full max-w-5xl px-4 py-8 text-center text-xs text-stone-500 sm:px-6">
                {kelompok && (
                    <p className="mb-1 font-medium text-stone-600 dark:text-stone-400">
                        {kelompok.nama_kelompok} — {kelompok.universitas}
                    </p>
                )}
                <p>Sumber gerakan &amp; bacaan: Himpunan Putusan Tarjih (HPT) Muhammadiyah.</p>
            </div>
        </footer>
    );
}
