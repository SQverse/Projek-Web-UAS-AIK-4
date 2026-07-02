import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { PlayCircle } from 'lucide-react';

/**
 * Ubah URL YouTube (watch / youtu.be / embed) menjadi URL embed.
 * Mengembalikan null bila bukan URL YouTube yang dikenali.
 */
function toYoutubeEmbed(url: string): string | null {
    const patterns = [
        /(?:youtube\.com\/watch\?v=)([\w-]{11})/,
        /(?:youtu\.be\/)([\w-]{11})/,
        /(?:youtube\.com\/embed\/)([\w-]{11})/,
        /(?:youtube\.com\/shorts\/)([\w-]{11})/,
    ];
    for (const re of patterns) {
        const m = url.match(re);
        if (m) return `https://www.youtube.com/embed/${m[1]}`;
    }
    return null;
}

export default function VideoDialog({ url, title }: { url: string; title: string }) {
    const embed = toYoutubeEmbed(url);

    // Bukan YouTube — tampilkan tautan biasa agar tetap dapat diakses.
    if (!embed) {
        return (
            <a
                href={url}
                target="_blank"
                rel="noreferrer"
                className="inline-flex items-center gap-2 rounded-full bg-red-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-700"
            >
                <PlayCircle className="size-4" /> Tonton Video
            </a>
        );
    }

    return (
        <Dialog>
            <DialogTrigger className="inline-flex items-center gap-2 rounded-full bg-red-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-700">
                <PlayCircle className="size-4" /> Tonton Video
            </DialogTrigger>
            <DialogContent className="max-w-2xl">
                <DialogHeader>
                    <DialogTitle>Video — {title}</DialogTitle>
                </DialogHeader>
                <div className="aspect-video w-full overflow-hidden rounded-lg">
                    <iframe
                        src={embed}
                        title={`Video ${title}`}
                        className="size-full"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowFullScreen
                    />
                </div>
            </DialogContent>
        </Dialog>
    );
}
