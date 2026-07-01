<?php

/**
 * Data konten tuntunan sholat — sumber gerakan & bacaan dari
 * Himpunan Putusan Tarjih (HPT) Muhammadiyah.
 *
 * Teks Arab & transliterasi Latin disalin dari:
 *   "Tuntunan Doa Shalat sesuai Himpunan Putusan Tarjih Muhammadiyah"
 *   (docs/HPT/TUNTUNAN-DOA-SHALAT-HPT-JADI.pdf).
 * Terjemahan Indonesia mengikuti makna baku bacaan tersebut.
 *
 * Struktur:
 *   deskripsi & terjemahan berbentuk ['dewasa' => ..., 'anak' => ...]
 *   agar satu sumber data melayani dua mode (F-07).
 *
 * gambar_url & audio_url berisi path aset yang direservasi; berkas fisik
 * dilengkapi pada tahap pengisian aset media.
 */
$sumberHpt = 'HPT Muhammadiyah — Tuntunan Doa Shalat (RS PKU Muhammadiyah Cepu)';
$sumberKitab = 'HPT Muhammadiyah — Kitab Shalat';

$tasbihArab = 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اللّٰهُمَّ اغْفِرْ لِى';
$tasbihLatin = 'Subhaanakallaahumma rabbanaa wa bihamdika, allaahummaghfir lii.';
$tasbihTerjemahan = [
    'dewasa' => 'Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu; ya Allah, ampunilah aku.',
    'anak' => 'Maha Suci Allah, Tuhanku. Ya Allah, ampunilah aku.',
];

return [
    [
        'urutan' => 1,
        'nama' => 'Berdiri Tegak (Qiyam) & Niat',
        'slug' => 'qiyam',
        'deskripsi' => [
            'dewasa' => 'Berdiri tegak menghadap kiblat bagi yang mampu, disertai niat di dalam hati. Menurut Tarjih, niat cukup di hati tanpa dilafalkan.',
            'anak' => 'Berdiri tegak menghadap kiblat. Niat sholat di dalam hati, tidak perlu diucapkan.',
        ],
        'bacaan' => [],
    ],
    [
        'urutan' => 2,
        'nama' => 'Takbiratul Ihram',
        'slug' => 'takbiratul-ihram',
        'deskripsi' => [
            'dewasa' => 'Mengangkat kedua tangan sejajar bahu atau telinga sambil mengucapkan takbir, menandai dimulainya sholat.',
            'anak' => 'Angkat kedua tangan sambil mengucap "Allahu Akbar".',
        ],
        'bacaan' => [
            [
                'judul' => 'Takbir',
                'teks_arab' => 'اللّٰهُ أَكْبَرُ',
                'teks_latin' => 'Allaahu akbar.',
                'terjemahan' => [
                    'dewasa' => 'Allah Maha Besar.',
                    'anak' => 'Allah Maha Besar.',
                ],
                'sumber' => $sumberKitab,
            ],
        ],
    ],
    [
        'urutan' => 3,
        'nama' => 'Bersedekap & Doa Iftitah',
        'slug' => 'iftitah',
        'deskripsi' => [
            'dewasa' => 'Meletakkan tangan kanan di atas tangan kiri di dada, lalu membaca doa iftitah sebagai pembuka sholat.',
            'anak' => 'Sedekapkan tangan kanan di atas tangan kiri, lalu baca doa iftitah.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Iftitah',
                'teks_arab' => 'اَللّٰهُمَّ بَاعِدْ بَيْنِى وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اَللّٰهُمَّ نَقِّنِى مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اَللّٰهُمَّ اغْسِلْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ',
                'teks_latin' => "Allaahumma baa'id bainii wa baina khathaayaaya kamaa baa'adta bainal masyriqi wal maghrib. Allaahumma naqqinii minal khathaayaa kamaa yunaqqats tsaubul abyadhu minad danas. Allaahummaghsil khathaayaaya bil maa-i wats tsalji wal barad.",
                'terjemahan' => [
                    'dewasa' => 'Ya Allah, jauhkanlah antara aku dan kesalahan-kesalahanku sebagaimana Engkau menjauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan-kesalahan sebagaimana pakaian putih dibersihkan dari kotoran. Ya Allah, cucilah kesalahan-kesalahanku dengan air, salju, dan embun.',
                    'anak' => 'Ya Allah, jauhkan aku dari kesalahan dan bersihkan hatiku seperti baju putih yang bersih.',
                ],
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 4,
        'nama' => 'Membaca Al-Fatihah',
        'slug' => 'al-fatihah',
        'deskripsi' => [
            'dewasa' => 'Membaca Surah Al-Fatihah pada setiap rakaat, dilanjutkan surah atau ayat Al-Qur\'an pada dua rakaat pertama.',
            'anak' => 'Baca Surah Al-Fatihah, lalu surah pendek yang kamu hafal.',
        ],
        'bacaan' => [
            [
                'judul' => 'Surah Al-Fatihah',
                'teks_arab' => 'بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ. اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَ. الرَّحْمٰنِ الرَّحِيْمِ. مٰلِكِ يَوْمِ الدِّيْنِ. إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِيْنُ. اهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ. صِرَاطَ الَّذِيْنَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا الضَّالِّيْنَ',
                'teks_latin' => "Bismillaahir rahmaanir rahiim. Alhamdu lillaahi rabbil 'aalamiin. Ar-rahmaanir rahiim. Maaliki yaumid diin. Iyyaaka na'budu wa iyyaaka nasta'iin. Ihdinash shiraathal mustaqiim. Shiraathal ladziina an'amta 'alaihim ghairil maghdhuubi 'alaihim wa ladh dhaalliin.",
                'terjemahan' => [
                    'dewasa' => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Segala puji bagi Allah, Tuhan semesta alam. Yang Maha Pengasih lagi Maha Penyayang. Pemilik hari pembalasan. Hanya kepada-Mu kami menyembah dan hanya kepada-Mu kami memohon pertolongan. Tunjukilah kami jalan yang lurus. (Yaitu) jalan orang-orang yang telah Engkau beri nikmat, bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) mereka yang sesat.',
                    'anak' => 'Dengan nama Allah Yang Maha Pengasih dan Penyayang. Segala puji bagi Allah, Tuhan semesta alam. Tunjukilah kami jalan yang lurus.',
                ],
                'sumber' => 'QS. Al-Fatihah: 1–7',
            ],
        ],
    ],
    [
        'urutan' => 5,
        'nama' => 'Rukuk',
        'slug' => 'rukuk',
        'deskripsi' => [
            'dewasa' => 'Membungkukkan badan dengan punggung lurus, kedua tangan memegang lutut, disertai thuma\'ninah (tenang).',
            'anak' => 'Membungkuk dengan tangan memegang lutut dan punggung lurus.',
        ],
        'bacaan' => [
            [
                'judul' => 'Tasbih Rukuk',
                'teks_arab' => $tasbihArab,
                'teks_latin' => $tasbihLatin,
                'terjemahan' => $tasbihTerjemahan,
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 6,
        'nama' => "I'tidal",
        'slug' => 'itidal',
        'deskripsi' => [
            'dewasa' => 'Bangkit dari rukuk hingga berdiri tegak, membaca "sami\'allaahu liman hamidah" saat bangkit lalu doa i\'tidal.',
            'anak' => 'Bangun dari rukuk sampai berdiri tegak sambil membaca doa.',
        ],
        'bacaan' => [
            [
                'judul' => 'Ketika Bangkit',
                'teks_arab' => 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ',
                'teks_latin' => "Sami'allaahu liman hamidah.",
                'terjemahan' => [
                    'dewasa' => 'Allah Maha Mendengar orang yang memuji-Nya.',
                    'anak' => 'Allah mendengar orang yang memuji-Nya.',
                ],
                'sumber' => $sumberKitab,
            ],
            [
                'judul' => "Doa I'tidal",
                'teks_arab' => 'رَبَّنَا وَلَكَ الْحَمْدُ حَمْدًا كَثِيْرًا طَيِّبًا مُبَارَكًا فِيْهِ',
                'teks_latin' => 'Rabbanaa wa lakalhamdu, hamdan katsiiran thayyiban mubaarakan fiih.',
                'terjemahan' => [
                    'dewasa' => 'Ya Tuhan kami, bagi-Mu segala puji, pujian yang banyak, baik, dan penuh berkah.',
                    'anak' => 'Ya Allah, hanya bagi-Mu segala pujian yang baik.',
                ],
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 7,
        'nama' => 'Sujud Pertama',
        'slug' => 'sujud-pertama',
        'deskripsi' => [
            'dewasa' => 'Bersujud dengan tujuh anggota badan menyentuh lantai (dahi-hidung, dua telapak tangan, dua lutut, dua ujung kaki), disertai thuma\'ninah.',
            'anak' => 'Sujud dengan dahi, hidung, tangan, lutut, dan ujung kaki menyentuh lantai.',
        ],
        'bacaan' => [
            [
                'judul' => 'Tasbih Sujud',
                'teks_arab' => $tasbihArab,
                'teks_latin' => $tasbihLatin,
                'terjemahan' => $tasbihTerjemahan,
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 8,
        'nama' => 'Duduk di Antara Dua Sujud',
        'slug' => 'duduk-antara-sujud',
        'deskripsi' => [
            'dewasa' => 'Duduk iftirasy (kaki kiri diduduki, kaki kanan ditegakkan) dengan thuma\'ninah sambil membaca doa.',
            'anak' => 'Duduk tenang di antara dua sujud sambil membaca doa.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Duduk di Antara Dua Sujud',
                'teks_arab' => 'اَللّٰهُمَّ اغْفِرْ لِى وَارْحَمْنِى وَاجْبُرْنِى وَاهْدِنِى وَارْزُقْنِى',
                'teks_latin' => 'Allaahummaghfir lii warhamnii wajburnii wahdinii warzuqnii.',
                'terjemahan' => [
                    'dewasa' => 'Ya Allah, ampunilah aku, sayangilah aku, cukupkanlah kekuranganku, tunjukilah aku, dan berilah aku rezeki.',
                    'anak' => 'Ya Allah, ampuni aku, sayangi aku, dan beri aku rezeki.',
                ],
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 9,
        'nama' => 'Sujud Kedua',
        'slug' => 'sujud-kedua',
        'deskripsi' => [
            'dewasa' => 'Sujud kedua sebagaimana sujud pertama, dengan thuma\'ninah, menyempurnakan satu rakaat.',
            'anak' => 'Sujud sekali lagi seperti sujud pertama.',
        ],
        'bacaan' => [
            [
                'judul' => 'Tasbih Sujud',
                'teks_arab' => $tasbihArab,
                'teks_latin' => $tasbihLatin,
                'terjemahan' => $tasbihTerjemahan,
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 10,
        'nama' => 'Berdiri ke Rakaat Berikutnya',
        'slug' => 'berdiri-rakaat-berikutnya',
        'deskripsi' => [
            'dewasa' => 'Bangkit berdiri untuk rakaat berikutnya sambil bertakbir, lalu mengulangi bacaan Al-Fatihah dan seterusnya.',
            'anak' => 'Berdiri lagi untuk rakaat berikutnya sambil mengucap "Allahu Akbar".',
        ],
        'bacaan' => [],
    ],
    [
        'urutan' => 11,
        'nama' => 'Duduk Tasyahud Awal',
        'slug' => 'tasyahud-awal',
        'deskripsi' => [
            'dewasa' => 'Duduk iftirasy pada rakaat kedua sholat yang lebih dari dua rakaat, membaca tasyahud (tahiyat).',
            'anak' => 'Duduk membaca tahiyat awal pada rakaat kedua.',
        ],
        'bacaan' => [
            [
                'judul' => 'Tasyahud (Tahiyat)',
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّٰهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلٰهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'teks_latin' => "Attahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat. Assalaamu 'alaika ayyuhannabiyyu wa rahmatullaahi wa barakaatuh. Assalaamu 'alainaa wa 'alaa 'ibaadillaahish shaalihiin. Asyhadu allaa ilaaha illallaah, wa asyhadu anna muhammadan 'abduhu wa rasuuluh.",
                'terjemahan' => [
                    'dewasa' => 'Segala penghormatan, keberkahan, dan kebaikan hanya milik Allah. Semoga keselamatan atasmu wahai Nabi, beserta rahmat Allah dan berkah-Nya. Semoga keselamatan atas kami dan hamba-hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah hamba dan utusan-Nya.',
                    'anak' => 'Segala penghormatan milik Allah. Aku bersaksi tiada Tuhan selain Allah, dan Nabi Muhammad adalah utusan Allah.',
                ],
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 12,
        'nama' => 'Duduk Tasyahud Akhir',
        'slug' => 'tasyahud-akhir',
        'deskripsi' => [
            'dewasa' => 'Duduk tawarruk pada rakaat terakhir, membaca tasyahud, shalawat kepada Nabi, dan doa perlindungan.',
            'anak' => 'Duduk di rakaat terakhir membaca tahiyat, shalawat, dan doa.',
        ],
        'bacaan' => [
            [
                'judul' => 'Tasyahud (Tahiyat)',
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّٰهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلٰهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'teks_latin' => "Attahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat. Assalaamu 'alaika ayyuhannabiyyu wa rahmatullaahi wa barakaatuh. Assalaamu 'alainaa wa 'alaa 'ibaadillaahish shaalihiin. Asyhadu allaa ilaaha illallaah, wa asyhadu anna muhammadan 'abduhu wa rasuuluh.",
                'terjemahan' => [
                    'dewasa' => 'Segala penghormatan, keberkahan, dan kebaikan hanya milik Allah. Semoga keselamatan atasmu wahai Nabi, beserta rahmat Allah dan berkah-Nya. Semoga keselamatan atas kami dan hamba-hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah hamba dan utusan-Nya.',
                    'anak' => 'Segala penghormatan milik Allah. Aku bersaksi tiada Tuhan selain Allah, dan Nabi Muhammad adalah utusan Allah.',
                ],
                'sumber' => $sumberHpt,
            ],
            [
                'judul' => 'Shalawat kepada Nabi',
                'teks_arab' => 'اَللّٰهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى اٰلِ مُحَمَّدٍ كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيْمَ وَاٰلِ إِبْرَاهِيْمَ، وَبَارِكْ عَلَى مُحَمَّدٍ وَاٰلِ مُحَمَّدٍ كَمَا بَارَكْتَ عَلَى إِبْرَاهِيْمَ وَاٰلِ إِبْرَاهِيْمَ، إِنَّكَ حَمِيْدٌ مَجِيْدٌ',
                'teks_latin' => "Allaahumma shalli 'alaa muhammad wa 'alaa aali muhammad, kamaa shallaita 'alaa ibraahiim wa aali ibraahiim. Wa baarik 'alaa muhammad wa 'alaa aali muhammad, kamaa baarakta 'alaa ibraahiim wa aali ibraahiim. Innaka hamiidum majiid.",
                'terjemahan' => [
                    'dewasa' => 'Ya Allah, berilah rahmat kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau memberi rahmat kepada Ibrahim dan keluarga Ibrahim. Berilah berkah kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau memberi berkah kepada Ibrahim dan keluarga Ibrahim. Sesungguhnya Engkau Maha Terpuji lagi Maha Mulia.',
                    'anak' => 'Ya Allah, berilah rahmat dan berkah kepada Nabi Muhammad dan keluarganya, seperti kepada Nabi Ibrahim. Engkau Maha Terpuji dan Maha Mulia.',
                ],
                'sumber' => $sumberHpt,
            ],
            [
                'judul' => 'Doa Sesudah Tasyahud Akhir',
                'teks_arab' => 'اَللّٰهُمَّ إِنِّى أَعُوْذُ بِكَ مِنْ عَذَابِ جَهَنَّمَ، وَمِنْ عَذَابِ الْقَبْرِ، وَمِنْ فِتْنَةِ الْمَحْيَا وَالْمَمَاتِ، وَمِنْ شَرِّ فِتْنَةِ الْمَسِيْحِ الدَّجَّالِ',
                'teks_latin' => "Allaahumma innii a'uudzu bika min 'adzaabi jahannam, wa min 'adzaabil qabri, wa min fitnatil mahyaa wal mamaati, wa min syarri fitnatil masiihid dajjaal.",
                'terjemahan' => [
                    'dewasa' => 'Ya Allah, aku berlindung kepada-Mu dari azab neraka Jahanam, dari azab kubur, dari fitnah kehidupan dan kematian, serta dari kejahatan fitnah Al-Masih Dajjal.',
                    'anak' => 'Ya Allah, lindungi aku dari azab neraka, azab kubur, dan segala keburukan.',
                ],
                'sumber' => $sumberHpt,
            ],
        ],
    ],
    [
        'urutan' => 13,
        'nama' => 'Salam',
        'slug' => 'salam',
        'deskripsi' => [
            'dewasa' => 'Menoleh ke kanan lalu ke kiri sambil mengucapkan salam, menandai berakhirnya sholat.',
            'anak' => 'Menoleh ke kanan dan ke kiri sambil mengucap salam.',
        ],
        'bacaan' => [
            [
                'judul' => 'Salam',
                'teks_arab' => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ',
                'teks_latin' => "Assalaamu 'alaikum wa rahmatullaah.",
                'terjemahan' => [
                    'dewasa' => 'Semoga keselamatan dan rahmat Allah tercurah atas kalian.',
                    'anak' => 'Semoga keselamatan dan rahmat Allah untuk kalian.',
                ],
                'sumber' => $sumberKitab,
            ],
        ],
    ],
];
