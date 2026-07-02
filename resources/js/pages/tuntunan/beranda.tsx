import PublicLayout from '@/layouts/public-layout';
import { type Kategori } from '@/types';
import { Head, Link } from '@inertiajs/react';
import { ArrowRight, BookOpenText, Sparkles } from 'lucide-react';

interface Props {
    kategoriList: Kategori[];
}

export default function Beranda({ kategoriList }: Props) {
    return (
        <PublicLayout>
            <Head title="Beranda" />

            <section className="relative overflow-hidden rounded-3xl border border-emerald-100 bg-gradient-to-br from-emerald-50 to-white px-6 py-14 text-center sm:py-20 dark:border-emerald-900/40 dark:from-emerald-950/30 dark:to-stone-950">
                <p dir="rtl" lang="ar" className="font-arabic mb-5 text-3xl text-emerald-700 sm:text-4xl dark:text-emerald-400">
                    بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ
                </p>
                <h1 className="mx-auto max-w-2xl text-3xl font-bold tracking-tight sm:text-4xl">
                    Tuntunan Tata Cara Sholat Sesuai Sunnah Rasulullah ﷺ
                </h1>
                <p className="mx-auto mt-4 max-w-xl text-stone-600 dark:text-stone-400">
                    Panduan gerakan dan bacaan sholat lengkap dengan teks Arab, transliterasi Latin, terjemahan, dan audio — dirujuk dari Himpunan
                    Putusan Tarjih (HPT) Muhammadiyah.
                </p>
                <p className="mt-6 text-sm font-medium text-stone-500">Pilih mode penyajian di bawah ini:</p>
            </section>

            <div className="mt-8 grid gap-5 sm:grid-cols-2">
                {kategoriList.map((kategori) => (
                    <ModeCard key={kategori.id} kategori={kategori} />
                ))}
            </div>

            <section className="mt-12 grid gap-4 sm:grid-cols-3">
                <Highlight icon={<BookOpenText className="size-5" />} title="Empat Lapis Bacaan">
                    Arab, Latin, terjemahan, dan audio untuk setiap bacaan.
                </Highlight>
                <Highlight icon={<Sparkles className="size-5" />} title="Dua Mode">
                    Penyajian formal untuk dewasa dan ringkas untuk anak-anak.
                </Highlight>
                <Highlight icon={<ArrowRight className="size-5" />} title="Terverifikasi">
                    Setiap bacaan mencantumkan sumber perawi dari HPT Muhammadiyah.
                </Highlight>
            </section>
        </PublicLayout>
    );
}

function ModeCard({ kategori }: { kategori: Kategori }) {
    const isAnak = kategori.slug === 'anak';
    return (
        <Link
            href={`/${kategori.slug}`}
            className="group relative overflow-hidden rounded-2xl border border-stone-200 bg-white p-6 transition hover:-translate-y-0.5 hover:border-emerald-300 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900 dark:hover:border-emerald-800"
        >
            <div className="flex items-start justify-between">
                <span
                    className={
                        'flex size-12 items-center justify-center rounded-2xl text-2xl ' +
                        (isAnak ? 'bg-amber-100 dark:bg-amber-950/40' : 'bg-emerald-100 dark:bg-emerald-950/40')
                    }
                >
                    {isAnak ? '🧒' : '🕌'}
                </span>
                <ArrowRight className="size-5 text-stone-300 transition group-hover:translate-x-1 group-hover:text-emerald-600" />
            </div>
            <h2 className="mt-4 text-xl font-semibold">Mode {kategori.nama}</h2>
            {kategori.deskripsi && <p className="mt-1 text-sm text-stone-500">{kategori.deskripsi}</p>}
            <p className="mt-4 text-sm font-medium text-emerald-700 dark:text-emerald-400">{kategori.gerakan_count ?? 0} gerakan sholat</p>
        </Link>
    );
}

function Highlight({ icon, title, children }: { icon: React.ReactNode; title: string; children: React.ReactNode }) {
    return (
        <div className="rounded-2xl border border-stone-200 bg-white p-5 dark:border-stone-800 dark:bg-stone-900">
            <span className="flex size-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">
                {icon}
            </span>
            <h3 className="mt-3 font-semibold">{title}</h3>
            <p className="mt-1 text-sm text-stone-500">{children}</p>
        </div>
    );
}
