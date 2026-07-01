import { LucideIcon } from 'lucide-react';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    url: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    kelompok: Kelompok | null;
    [key: string]: unknown;
}

export interface Kelompok {
    id: number;
    nama_kelompok: string;
    prodi: string;
    mata_kuliah: string;
    dosen: string;
    universitas: string | null;
}

export interface Kategori {
    id: number;
    slug: 'dewasa' | 'anak';
    nama: string;
    deskripsi: string | null;
    gerakan_count?: number;
}

export interface Gerakan {
    id: number;
    kategori_id?: number;
    kategori?: Pick<Kategori, 'id' | 'slug' | 'nama'>;
    urutan: number;
    nama: string;
    slug: string;
    deskripsi: string | null;
    gambar_url: string | null;
    video_url: string | null;
    bacaan_count?: number;
    bacaan?: Bacaan[];
}

export interface Bacaan {
    id?: number;
    gerakan_id?: number;
    urutan: number;
    judul: string | null;
    teks_arab: string | null;
    teks_latin: string | null;
    terjemahan: string | null;
    audio_url: string | null;
    sumber: string | null;
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}
