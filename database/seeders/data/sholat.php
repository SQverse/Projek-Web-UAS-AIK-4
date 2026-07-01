<?php

/**
 * Data konten tuntunan sholat — sumber gerakan & bacaan dari
 * Himpunan Putusan Tarjih (HPT) Muhammadiyah.
 *
 * Sumber utama: "Fikih Kebencanaan dan Tuntunan Salat" (Keputusan Musyawarah
 * Nasional Tarjih XXIX), bagian "Tuntunan Salat Lima Waktu — Tata Cara Salat".
 * Teks Arab & transliterasi Latin disalin dari kitab tersebut
 * (docs/HPT/Fikih-Kebencanaan-dan-Tuntunan-Shalat-1.pdf); dilengkapi
 * docs/HPT/TUNTUNAN-DOA-SHALAT-HPT-JADI.pdf.
 *
 * Konvensi tiap bacaan:
 *   judul, ar (arab), la (latin), td (terjemahan dewasa), ta (terjemahan anak),
 *   src (perawi/sumber hadis), m (mode: 'both' = tampil di dewasa & anak,
 *   'dewasa' = varian lengkap khusus mode dewasa).
 * Mode Dewasa menampilkan seluruh varian; mode Anak menampilkan satu doa
 * utama per langkah dengan terjemahan ringkas (F-07).
 * src digabung sufiks "— HPT Muhammadiyah" oleh seeder.
 */

// Bacaan yang dipakai ulang di beberapa gerakan.
$tasyahud1 = [
    'judul' => 'Tasyahud / Tahiyat',
    'ar' => 'اَلتَّحِيَّاتُ لِلّٰهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلٰهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
    'la' => 'At-taḥiyātu lillāhi waṣ-ṣalawātu waṭ-ṭayyibāt. As-salāmu ‘alaika ayyuhan-nabiyyu wa raḥmatullāhi wa barakātuh. As-salāmu ‘alainā wa ‘alā ‘ibādillāhiṣ-ṣāliḥīn. Asyhadu allā ilāha illallāhu, wa asyhadu anna Muḥammadan ‘abduhu wa rasūluh.',
    'td' => 'Penghormatan, selawat, dan segala yang baik-baik adalah bagi Allah. Kedamaian, rahmat, dan berkah dari Allah semoga dilimpahkan kepadamu wahai Nabi. Kedamaian juga semoga dilimpahkan kepada kita dan semua hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah dan aku bersaksi bahwa Muhammad adalah hamba-Nya dan utusan-Nya.',
    'ta' => 'Segala penghormatan milik Allah. Aku bersaksi tiada Tuhan selain Allah, dan Nabi Muhammad utusan Allah.',
    'src' => 'HR al-Bukhārī dan Muslim (dari Ibn Mas‘ūd)',
    'm' => 'both',
];

$tasyahud2 = [
    'judul' => 'Tasyahud / Tahiyat (varian riwayat Ibn ‘Abbās)',
    'ar' => 'اَلتَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ وَالطَّيِّبَاتُ لِلّٰهِ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللهِ',
    'la' => 'At-taḥiyyātul-mubārakātuṣ-ṣalawātu waṭ-ṭayyibātu lillāh. As-salāmu ‘alaika ayyuhan-nabiyyu wa raḥmatullāhi wa barakātuh. As-salāmu ‘alainā wa ‘alā ‘ibādillāhiṣ-ṣāliḥīn. Asyhadu allā ilāha illallāhu wa asyhadu anna Muḥammadar rasūlullāh.',
    'td' => 'Segala kehormatan yang penuh berkah, keagungan, dan segala yang baik-baik adalah kepunyaan Allah. Kedamaian semoga dilimpahkan kepadamu wahai Nabi, begitu pula rahmat dan keberkahan dari Allah. Kedamaian juga semoga dilimpahkan kepada kita dan semua hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah, dan aku bersaksi bahwa Muhammad itu utusan Allah.',
    'src' => 'HR Muslim (dari Ibn ‘Abbās)',
    'm' => 'dewasa',
];

return [
    [
        'urutan' => 1,
        'nama' => 'Berdiri Tegak (Qiyam) & Niat',
        'slug' => 'qiyam',
        'deskripsi' => [
            'dewasa' => 'Berdiri tegak menghadap kiblat bagi yang mampu, disertai niat ikhlas di dalam hati. Menurut Tarjih, niat cukup di hati tanpa dilafalkan.',
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
                'ar' => 'اللّٰهُ أَكْبَرُ',
                'la' => 'Allāhu akbar.',
                'td' => 'Allah Maha Besar.',
                'ta' => 'Allah Maha Besar.',
                'src' => 'Muttafaq ‘alaih (dari Abū Hurairah)',
                'm' => 'both',
            ],
        ],
    ],
    [
        'urutan' => 3,
        'nama' => 'Bersedekap & Doa Iftitah',
        'slug' => 'iftitah',
        'deskripsi' => [
            'dewasa' => 'Meletakkan tangan kanan di atas tangan kiri di dada, lalu membaca doa iftitah secara sir (lirih). HPT menyebut beberapa varian doa iftitah.',
            'anak' => 'Sedekapkan tangan kanan di atas tangan kiri, lalu baca doa iftitah pelan.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Iftitah (Allāhumma bā‘id)',
                'ar' => 'اَللّٰهُمَّ بَاعِدْ بَيْنِى وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اَللّٰهُمَّ نَقِّنِى مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اَللّٰهُمَّ اغْسِلْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ',
                'la' => 'Allāhumma bā‘id bainī wa baina khaṭāyāyā kamā bā‘adta bainal-masyriqi wal-magrib. Allāhumma naqqinī minal-khaṭāyā kamā yunaqqaṣ-ṣaubul-abyaḍu minad-danas. Allāhummagsil khaṭāyāyā bil-mā’i waṣ-ṣalji wal-barad.',
                'td' => 'Ya Allah, jauhkanlah antara diriku dan kesalahanku sebagaimana Engkau menjauhkan antara timur dan barat. Ya Allah, bersihkanlah diriku dari segala kesalahan sebagaimana bersihnya pakaian putih dari kotoran. Ya Allah, cucilah segala kesalahanku dengan air, salju, dan embun.',
                'src' => 'HR al-Bukhārī (dari Abū Hurairah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Iftitah (Wajjahtu wajhiya)',
                'ar' => 'وَجَّهْتُ وَجْهِيَ لِلَّذِى فَطَرَ السَّمَاوَاتِ وَالْأَرْضَ حَنِيْفًا مُسْلِمًا وَمَا أَنَا مِنَ الْمُشْرِكِيْنَ، إِنَّ صَلَاتِى وَنُسُكِى وَمَحْيَايَ وَمَمَاتِى لِلّٰهِ رَبِّ الْعَالَمِيْنَ، لَا شَرِيْكَ لَهُ وَبِذَلِكَ أُمِرْتُ وَأَنَا أَوَّلُ الْمُسْلِمِيْنَ. اَللّٰهُمَّ أَنْتَ الْمَلِكُ لَا إِلَهَ إِلَّا أَنْتَ، أَنْتَ رَبِّى وَأَنَا عَبْدُكَ، ظَلَمْتُ نَفْسِى وَاعْتَرَفْتُ بِذَنْبِى فَاغْفِرْ لِى ذُنُوْبِى جَمِيْعًا، إِنَّهُ لَا يَغْفِرُ الذُّنُوْبَ إِلَّا أَنْتَ، وَاهْدِنِى لِأَحْسَنِ الْأَخْلَاقِ لَا يَهْدِى لِأَحْسَنِهَا إِلَّا أَنْتَ، وَاصْرِفْ عَنِّى سَيِّئَهَا لَا يَصْرِفُ عَنِّى سَيِّئَهَا إِلَّا أَنْتَ، لَبَّيْكَ وَسَعْدَيْكَ، وَالْخَيْرُ كُلُّهُ فِى يَدَيْكَ، وَالشَّرُّ لَيْسَ إِلَيْكَ، أَنَا بِكَ وَإِلَيْكَ، تَبَارَكْتَ وَتَعَالَيْتَ، أَسْتَغْفِرُكَ وَأَتُوْبُ إِلَيْكَ',
                'la' => 'Wajjahtu wajhiya lil-lażī faṭaras-samāwāti wal-arḍa ḥanīfan muslima wa mā ana minal-musyrikīn. Inna ṣalātī wa nusukī wa maḥyāyā wa mamātī lillāhi rabbil-‘ālamīn, lā syarīka lahu wa bi żālika umirtu wa ana minal-muslimīn. Allāhumma antal-maliku, lā ilāha illā anta, anta rabbī wa ana ‘abduk, ẓalamtu nafsī wa‘taraftu bi żambī, fagfir lī żunūbī jamī‘an, innahu lā yagfiruż-żunūba illā anta, wahdinī li aḥsanil-akhlāq, lā yahdī li aḥsanihā illā anta, waṣrif ‘annī sayyi’ahā lā yaṣrifu ‘annī sayyi’ahā illā anta, labbaika wa sa‘daika, wal-khairu kulluhu fī yadaika wasy-syarru laisa ilaika. Ana bika wa ilaika, tabārakta wa ta‘ālaita, astagfiruka wa atūbu ilaik.',
                'td' => 'Kuhadapkan wajahku kepada Zat yang menciptakan langit dan bumi dengan lurus dan aku tidak termasuk golongan orang musyrik. Sesungguhnya salatku, ibadahku, hidup, dan matiku hanya untuk Allah Tuhan semesta alam. Tidak ada sekutu bagi-Nya dan dengan itu aku diperintahkan dan aku termasuk golongan orang muslim. Ya Allah, Engkaulah Yang Maha Kuasa, tiada Tuhan selain Engkau. Engkau Tuhanku dan aku hamba-Mu. Aku menganiaya diriku dan mengakui dosaku, maka ampunilah semua dosaku. Sesungguhnya tiada yang mengampuni dosa kecuali Engkau. Tunjukilah aku akhlak terbaik, tiada yang menunjukkannya kecuali Engkau, dan jauhkanlah aku dari akhlak buruk, tiada yang menjauhkannya kecuali Engkau. Aku penuhi seruan-Mu, segala kebaikan di tangan-Mu, dan keburukan tidak dinisbahkan kepada-Mu. Aku bersama-Mu dan kepada-Mu aku kembali. Maha Berkah dan Maha Tinggi Engkau. Aku mohon ampun dan bertobat kepada-Mu.',
                'src' => 'HR Abū Dāwūd dan Muslim (dari ‘Alī Ibn Abī Ṭālib)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Iftitah (Allāhu akbar kabīran)',
                'ar' => 'اللهُ أَكْبَرُ كَبِيْرًا وَالْحَمْدُ لِلّٰهِ كَثِيْرًا وَسُبْحَانَ اللهِ بُكْرَةً وَأَصِيْلًا',
                'la' => 'Allāhu akbar kabīran wal-ḥamdulillāhi kaṡīran wa subḥānallāhi bukratan wa aṣīlā.',
                'td' => 'Allah Maha Besar sebesar-besarnya, segala puji bagi Allah sebanyak-banyaknya, dan Maha Suci Allah sepanjang pagi dan petang.',
                'src' => 'HR at-Tirmiżī (dari Ibn ‘Umar)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Iftitah (Subḥānakallāhumma)',
                'ar' => 'سُبْحَانَكَ اللّٰهُمَّ وَبِحَمْدِكَ وَتَبَارَكَ اسْمُكَ وَتَعَالَى جَدُّكَ وَلَا إِلَهَ غَيْرُكَ',
                'la' => 'Subḥānakallāhumma wa bi ḥamdika wa tabārakasmuka wa ta‘ālā jadduka wa lā ilāha gairuk.',
                'td' => 'Maha Suci Engkau ya Allah, dan aku memuji-Mu. Maha Berkah nama-Mu, Maha Tinggi keagungan-Mu, dan tiada Tuhan selain Engkau.',
                'ta' => 'Maha Suci Engkau ya Allah, aku memuji-Mu. Maha Berkah nama-Mu, tiada Tuhan selain Engkau.',
                'src' => 'HR at-Tirmiżī (dari Abū Sa‘īd al-Khudrī)',
                'm' => 'both',
            ],
        ],
    ],
    [
        'urutan' => 4,
        'nama' => 'Taawuz, Basmalah & Al-Fatihah',
        'slug' => 'al-fatihah',
        'deskripsi' => [
            'dewasa' => 'Membaca taawuz dan basmalah secara sir, lalu Surah Al-Fatihah pada setiap rakaat dan mengucap "Amin". Pada dua rakaat pertama dilanjutkan surah atau ayat Al-Qur’an.',
            'anak' => 'Baca taawuz dan basmalah, lalu Surah Al-Fatihah dan ucap "Amin". Setelah itu baca surah pendek yang kamu hafal.',
        ],
        'bacaan' => [
            [
                'judul' => 'Taawuz (Istiazah)',
                'ar' => 'أَعُوْذُ بِاللهِ مِنَ الشَّيْطَانِ الرَّجِيْمِ',
                'la' => 'A‘ūżu billāhi minasy-syaiṭānir-rajīm.',
                'td' => 'Aku berlindung kepada Allah dari setan yang terkutuk.',
                'ta' => 'Aku berlindung kepada Allah dari setan yang terkutuk.',
                'src' => 'Berdasarkan QS an-Nahl (16): 98',
                'm' => 'both',
            ],
            [
                'judul' => 'Taawuz (as-Samī‘ul-‘Alīm)',
                'ar' => 'أَعُوْذُ بِاللهِ السَّمِيْعِ الْعَلِيْمِ مِنَ الشَّيْطَانِ الرَّجِيْمِ',
                'la' => 'A‘ūżu billāhis-samī‘il-‘alīmi minasy-syaiṭānir-rajīm.',
                'td' => 'Aku berlindung kepada Allah Yang Maha Mendengar lagi Maha Mengetahui dari setan yang terkutuk.',
                'src' => 'Berdasarkan QS Fuṣṣilat (41): 36',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Taawuz (lengkap)',
                'ar' => 'أَعُوْذُ بِاللهِ السَّمِيْعِ الْعَلِيْمِ مِنَ الشَّيْطَانِ الرَّجِيْمِ مِنْ هَمْزِهِ وَنَفْخِهِ وَنَفْثِهِ',
                'la' => 'A‘ūżu billāhis-samī‘il-‘alīmi minasy-syaiṭānir-rajīm min hamzihi wa nafkhihi wa nafṡih.',
                'td' => 'Aku berlindung kepada Allah Yang Maha Mendengar lagi Maha Mengetahui dari setan yang terkutuk; dari bisikannya, tiupannya, dan hembusannya.',
                'src' => 'HR at-Tirmiżī (dari Abū Sa‘īd al-Khudrī)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Basmalah',
                'ar' => 'بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ',
                'la' => 'Bismillāhir-raḥmānir-raḥīm.',
                'td' => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang.',
                'ta' => 'Dengan nama Allah Yang Maha Pengasih dan Penyayang.',
                'src' => 'HR an-Nasā’ī, Ibn Khuzaimah, Ibn Ḥibbān (dari Abū Hurairah)',
                'm' => 'both',
            ],
            [
                'judul' => 'Surah Al-Fatihah',
                'ar' => 'اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَ. الرَّحْمٰنِ الرَّحِيْمِ. مٰلِكِ يَوْمِ الدِّيْنِ. إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِيْنُ. اهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ. صِرَاطَ الَّذِيْنَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا الضَّالِّيْنَ',
                'la' => 'Alḥamdu lillāhi rabbil-‘ālamīn. Ar-raḥmānir-raḥīm. Māliki yaumid-dīn. Iyyāka na‘budu wa iyyāka nasta‘īn. Ihdinaṣ-ṣirāṭal-mustaqīm. Ṣirāṭal-lażīna an‘amta ‘alaihim gairil-magḍūbi ‘alaihim wa laḍ-ḍāllīn.',
                'td' => 'Segala puji bagi Allah, Tuhan semesta alam. Yang Maha Pengasih lagi Maha Penyayang. Pemilik hari pembalasan. Hanya kepada-Mu kami menyembah dan hanya kepada-Mu kami memohon pertolongan. Tunjukilah kami jalan yang lurus, (yaitu) jalan orang-orang yang telah Engkau beri nikmat; bukan (jalan) mereka yang dimurkai dan bukan (pula) mereka yang sesat.',
                'ta' => 'Segala puji bagi Allah, Tuhan semesta alam. Yang Maha Pengasih dan Penyayang. Tunjukilah kami jalan yang lurus.',
                'src' => 'QS Al-Fatihah: 1–7',
                'm' => 'both',
            ],
            [
                'judul' => 'Amin',
                'ar' => 'آمِيْن',
                'la' => 'Āmīn.',
                'td' => 'Kabulkanlah (doa kami).',
                'ta' => 'Kabulkanlah doa kami.',
                'src' => 'HR al-Bukhārī dan Muslim (dari Abū Hurairah)',
                'm' => 'both',
            ],
        ],
    ],
    [
        'urutan' => 5,
        'nama' => 'Rukuk',
        'slug' => 'rukuk',
        'deskripsi' => [
            'dewasa' => 'Membungkukkan badan dengan punggung lurus, kedua tangan memegang lutut, disertai thuma’ninah. HPT menyebut beberapa bacaan rukuk.',
            'anak' => 'Membungkuk dengan tangan memegang lutut dan punggung lurus, lalu baca tasbih.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Rukuk (Subḥānakallāhumma)',
                'ar' => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اللّٰهُمَّ اغْفِرْ لِى',
                'la' => 'Subḥānakallāhumma rabbanā wa bi ḥamdikallāhummagfir lī.',
                'td' => 'Maha Suci Engkau ya Allah, Tuhan kami, dan dengan memuji-Mu; ya Allah, ampunilah aku.',
                'src' => 'HR Muslim (dari ‘Ā’isyah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Rukuk (Subḥāna rabbiyal-‘aẓīm)',
                'ar' => 'سُبْحَانَ رَبِّيَ الْعَظِيْمِ، سُبْحَانَ رَبِّيَ الْعَظِيْمِ، سُبْحَانَ رَبِّيَ الْعَظِيْمِ',
                'la' => 'Subḥāna rabbiyal-‘aẓīm (dibaca tiga kali).',
                'td' => 'Maha Suci Tuhanku Yang Maha Agung (dibaca tiga kali).',
                'ta' => 'Maha Suci Tuhanku Yang Maha Agung.',
                'src' => 'HR ahli hadis yang empat, dan Ibn Mājah (dari Ḥużaifah)',
                'm' => 'both',
            ],
            [
                'judul' => 'Doa Rukuk (Subbūḥun quddūsun)',
                'ar' => 'سُبُّوْحٌ قُدُّوْسٌ رَبُّ الْمَلَائِكَةِ وَالرُّوْحِ',
                'la' => 'Subbūḥun quddūsun rabbul-malā’ikati war-rūḥ.',
                'td' => 'Maha Suci, Maha Kudus, Tuhan para malaikat dan ruh.',
                'src' => 'HR Muslim (dari ‘Ā’isyah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Rukuk (Allāhumma laka raka‘tu)',
                'ar' => 'اللّٰهُمَّ لَكَ رَكَعْتُ وَبِكَ آمَنْتُ وَلَكَ أَسْلَمْتُ، خَشَعَ لَكَ سَمْعِى وَبَصَرِى وَمُخِّى وَعَظْمِى وَعَصَبِى',
                'la' => 'Allāhumma laka raka‘tu, wa bika āmantu, wa laka aslamtu. Khasya‘a laka sam‘ī, wa baṣarī, wa mukhkhī, wa ‘aẓmī, wa ‘aṣabī.',
                'td' => 'Ya Allah, kepada-Mu aku rukuk, kepada-Mu aku beriman, dan kepada-Mu aku berserah diri. Kepada-Mu tunduk pendengaranku, penglihatanku, otakku, tulangku, dan sarafku.',
                'src' => 'HR Muslim (dari ‘Alī Ibn Abī Ṭālib)',
                'm' => 'dewasa',
            ],
        ],
    ],
    [
        'urutan' => 6,
        'nama' => 'I’tidal',
        'slug' => 'itidal',
        'deskripsi' => [
            'dewasa' => 'Bangkit dari rukuk seraya mengangkat kedua tangan dan membaca tasmi‘, lalu berdiri tegak (iktidal) membaca doa. HPT menyebut beberapa varian doa iktidal.',
            'anak' => 'Bangun dari rukuk sampai berdiri tegak sambil membaca doa.',
        ],
        'bacaan' => [
            [
                'judul' => 'Ketika Bangkit (Tasmi‘)',
                'ar' => 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ',
                'la' => 'Sami‘allāhu liman ḥamidah.',
                'td' => 'Allah Maha Mendengar orang yang memuji-Nya.',
                'ta' => 'Allah mendengar orang yang memuji-Nya.',
                'src' => 'HR al-Bukhārī dan Muslim (dari Ibn ‘Umar, Mālik Ibn al-Ḥuwairiṡ)',
                'm' => 'both',
            ],
            [
                'judul' => 'Doa Iktidal (Rabbanā lakal-ḥamd)',
                'ar' => 'رَبَّنَا لَكَ الْحَمْدُ',
                'la' => 'Rabbanā lakal-ḥamd.',
                'td' => 'Ya Tuhan kami, bagi-Mu segala pujian.',
                'ta' => 'Ya Allah, Tuhan kami, bagi-Mu segala pujian.',
                'src' => 'HR al-Bukhārī (dari Anas dan Abū Hurairah)',
                'm' => 'both',
            ],
            [
                'judul' => 'Doa Iktidal (Allāhumma rabbanā wa lakal-ḥamd)',
                'ar' => 'اللّٰهُمَّ رَبَّنَا وَلَكَ الْحَمْدُ',
                'la' => 'Allāhumma rabbanā wa lakal-ḥamd.',
                'td' => 'Ya Allah, ya Tuhan kami, dan bagi-Mu segala pujian.',
                'src' => 'HR al-Bukhārī (dari Abū Hurairah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Iktidal (ḥamdan kaṡīran)',
                'ar' => 'رَبَّنَا وَلَكَ الْحَمْدُ حَمْدًا كَثِيْرًا طَيِّبًا مُبَارَكًا فِيْهِ',
                'la' => 'Rabbanā wa lakal-ḥamdu, ḥamdan kaṡīran ṭayyiban mubārakan fīh.',
                'td' => 'Ya Tuhan kami, bagi-Mu segala pujian; pujian yang banyak, baik, dan penuh berkah di dalamnya.',
                'src' => 'HR al-Bukhārī (dari Rifā‘ah Ibn Rāfi‘ az-Zuraqī)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Iktidal (mil’us-samāwāti)',
                'ar' => 'اللّٰهُمَّ رَبَّنَا لَكَ الْحَمْدُ مِلْءُ السَّمَاوَاتِ وَمِلْءُ الْأَرْضِ وَمِلْءُ مَا شِئْتَ مِنْ شَيْءٍ بَعْدُ',
                'la' => 'Allāhumma rabbanā lakal-ḥamdu mil’as-samāwāti wa mil’al-arḍi wa mil’a mā syi’ta min syai’in ba‘du.',
                'td' => 'Ya Allah, ya Tuhan kami, bagi-Mu segala puji sepenuh langit, sepenuh bumi, dan sepenuh apa saja yang Engkau kehendaki sesudah itu.',
                'src' => 'HR al-Bukhārī (dari Ibn Abī Aufā)',
                'm' => 'dewasa',
            ],
        ],
    ],
    [
        'urutan' => 7,
        'nama' => 'Sujud Pertama',
        'slug' => 'sujud-pertama',
        'deskripsi' => [
            'dewasa' => 'Bersujud dengan tujuh anggota badan menyentuh lantai (dahi-hidung, dua telapak tangan, dua lutut, dua ujung kaki), disertai thuma’ninah.',
            'anak' => 'Sujud dengan dahi, hidung, tangan, lutut, dan ujung kaki menyentuh lantai, lalu baca tasbih.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Sujud (Subḥānakallāhumma)',
                'ar' => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اللّٰهُمَّ اغْفِرْ لِى',
                'la' => 'Subḥānakallāhumma rabbanā wa bi ḥamdikallāhummagfir lī.',
                'td' => 'Maha Suci Engkau ya Allah, Tuhan kami, dan dengan memuji-Mu; ya Allah, ampunilah aku.',
                'src' => 'HR al-Bukhārī dan Muslim (dari ‘Ā’isyah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Sujud (Subḥāna rabbiyal-a‘lā)',
                'ar' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى، سُبْحَانَ رَبِّيَ الْأَعْلَى، سُبْحَانَ رَبِّيَ الْأَعْلَى',
                'la' => 'Subḥāna rabbiyal-a‘lā (dibaca tiga kali).',
                'td' => 'Maha Suci Tuhanku Yang Maha Tinggi (dibaca tiga kali).',
                'ta' => 'Maha Suci Tuhanku Yang Maha Tinggi.',
                'src' => 'HR Muslim (dari Ḥużaifah); HR Abū Dāwūd (dari Ibn Mas‘ūd)',
                'm' => 'both',
            ],
            [
                'judul' => 'Doa Sujud (Subbūḥun quddūsun)',
                'ar' => 'سُبُّوْحٌ قُدُّوْسٌ رَبُّ الْمَلَائِكَةِ وَالرُّوْحِ',
                'la' => 'Subbūḥun quddūsun rabbul-malā’ikati war-rūḥ.',
                'td' => 'Maha Suci, Maha Kudus, Tuhan para malaikat dan ruh.',
                'src' => 'HR Muslim (dari ‘Ā’isyah)',
                'm' => 'dewasa',
            ],
        ],
    ],
    [
        'urutan' => 8,
        'nama' => 'Duduk di Antara Dua Sujud',
        'slug' => 'duduk-antara-sujud',
        'deskripsi' => [
            'dewasa' => 'Duduk iftirasy (kaki kiri diduduki, kaki kanan ditegakkan) dengan thuma’ninah sambil membaca doa.',
            'anak' => 'Duduk tenang di antara dua sujud sambil membaca doa.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Duduk di Antara Dua Sujud',
                'ar' => 'اللّٰهُمَّ اغْفِرْ لِى وَارْحَمْنِى وَاجْبُرْنِى وَاهْدِنِى وَارْزُقْنِى',
                'la' => 'Allāhummagfir lī warḥamnī wajburnī wahdinī warzuqnī.',
                'td' => 'Ya Allah, ampunilah aku, sayangilah aku, cukupkanlah kekuranganku, tunjukilah aku, dan berilah aku rezeki.',
                'ta' => 'Ya Allah, ampuni aku, sayangi aku, cukupkan kekuranganku, tunjuki aku, dan beri aku rezeki.',
                'src' => 'HR at-Tirmiżī (dari Ibn ‘Abbās)',
                'm' => 'both',
            ],
        ],
    ],
    [
        'urutan' => 9,
        'nama' => 'Sujud Kedua',
        'slug' => 'sujud-kedua',
        'deskripsi' => [
            'dewasa' => 'Sujud kedua sebagaimana sujud pertama, dengan thuma’ninah, menyempurnakan satu rakaat.',
            'anak' => 'Sujud sekali lagi seperti sujud pertama sambil membaca tasbih.',
        ],
        'bacaan' => [
            [
                'judul' => 'Doa Sujud (Subḥānakallāhumma)',
                'ar' => 'سُبْحَانَكَ اللّٰهُمَّ رَبَّنَا وَبِحَمْدِكَ اللّٰهُمَّ اغْفِرْ لِى',
                'la' => 'Subḥānakallāhumma rabbanā wa bi ḥamdikallāhummagfir lī.',
                'td' => 'Maha Suci Engkau ya Allah, Tuhan kami, dan dengan memuji-Mu; ya Allah, ampunilah aku.',
                'src' => 'HR al-Bukhārī dan Muslim (dari ‘Ā’isyah)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Sujud (Subḥāna rabbiyal-a‘lā)',
                'ar' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى، سُبْحَانَ رَبِّيَ الْأَعْلَى، سُبْحَانَ رَبِّيَ الْأَعْلَى',
                'la' => 'Subḥāna rabbiyal-a‘lā (dibaca tiga kali).',
                'td' => 'Maha Suci Tuhanku Yang Maha Tinggi (dibaca tiga kali).',
                'ta' => 'Maha Suci Tuhanku Yang Maha Tinggi.',
                'src' => 'HR Muslim (dari Ḥużaifah); HR Abū Dāwūd (dari Ibn Mas‘ūd)',
                'm' => 'both',
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
            'dewasa' => 'Duduk iftirasy pada rakaat kedua (untuk salat lebih dari dua rakaat), membaca tasyahud. HPT juga menganjurkan doa-doa pilihan.',
            'anak' => 'Duduk membaca tahiyat awal pada rakaat kedua.',
        ],
        'bacaan' => [
            $tasyahud1,
            $tasyahud2,
            [
                'judul' => 'Doa Pilihan (Allāhumma a‘innī)',
                'ar' => 'اللّٰهُمَّ أَعِنِّى عَلَى ذِكْرِكَ وَشُكْرِكَ وَحُسْنِ عِبَادَتِكَ',
                'la' => 'Allāhumma a‘innī ‘alā żikrika wa syukrika wa ḥusni ‘ibādatik.',
                'td' => 'Ya Allah, bantulah aku untuk mengingat-Mu, mensyukuri-Mu, dan beribadah dengan baik kepada-Mu.',
                'src' => 'HR an-Nasā’ī (dari Mu‘āż Ibn Jabal)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Pilihan (Allāhumma innī ẓalamtu nafsī)',
                'ar' => 'اللّٰهُمَّ إِنِّى ظَلَمْتُ نَفْسِى ظُلْمًا كَثِيْرًا وَلَا يَغْفِرُ الذُّنُوْبَ إِلَّا أَنْتَ فَاغْفِرْ لِى مَغْفِرَةً مِنْ عِنْدِكَ وَارْحَمْنِى إِنَّكَ أَنْتَ الْغَفُوْرُ الرَّحِيْمُ',
                'la' => 'Allāhumma innī ẓalamtu nafsī ẓulman kaṡīran, wa lā yagfiruż-żunūba illā anta, fagfir lī magfiratan min ‘indika, warḥamnī innaka antal-gafūrur-raḥīm.',
                'td' => 'Ya Allah, sesungguhnya aku telah menganiaya diriku dengan aniaya yang banyak, dan tiada yang mengampuni dosa kecuali Engkau. Maka ampunilah aku dengan ampunan dari sisi-Mu, dan kasihilah aku. Sesungguhnya Engkau Maha Pengampun lagi Maha Penyayang.',
                'src' => 'HR al-Bukhārī dan Muslim (dari Abū Bakr aṣ-Ṣiddīq)',
                'm' => 'dewasa',
            ],
        ],
    ],
    [
        'urutan' => 12,
        'nama' => 'Duduk Tasyahud Akhir',
        'slug' => 'tasyahud-akhir',
        'deskripsi' => [
            'dewasa' => 'Duduk tawarruk pada rakaat terakhir, membaca tasyahud, salawat kepada Nabi, dan doa perlindungan.',
            'anak' => 'Duduk di rakaat terakhir membaca tahiyat, salawat, lalu salam.',
        ],
        'bacaan' => [
            $tasyahud1,
            $tasyahud2,
            [
                'judul' => 'Salawat kepada Nabi',
                'ar' => 'اللّٰهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيْمَ وَآلِ إِبْرَاهِيْمَ، وَبَارِكْ عَلَى مُحَمَّدٍ وَآلِ مُحَمَّدٍ كَمَا بَارَكْتَ عَلَى إِبْرَاهِيْمَ وَآلِ إِبْرَاهِيْمَ، إِنَّكَ حَمِيْدٌ مَجِيْدٌ',
                'la' => 'Allāhumma ṣalli ‘alā Muḥammad wa ‘alā āli Muḥammad, kamā ṣallaita ‘alā Ibrāhīm wa āli Ibrāhīm, wa bārik ‘alā Muḥammad wa āli Muḥammad, kamā bārakta ‘alā Ibrāhīm wa āli Ibrāhīm. Innaka ḥamīdum majīd.',
                'td' => 'Ya Allah, limpahkanlah salawat kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau melimpahkan salawat kepada Ibrahim dan keluarga Ibrahim. Berilah berkah kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau memberi berkah kepada Ibrahim dan keluarga Ibrahim. Sesungguhnya Engkau Maha Terpuji lagi Maha Mulia.',
                'ta' => 'Ya Allah, berilah rahmat dan berkah kepada Nabi Muhammad dan keluarganya, seperti kepada Nabi Ibrahim. Engkau Maha Terpuji dan Maha Mulia.',
                'src' => 'HR asy-Syāfi‘ī (dari Ka‘b Ibn ‘Ujrah)',
                'm' => 'both',
            ],
            [
                'judul' => 'Salawat kepada Nabi (varian riwayat Muslim)',
                'ar' => 'اللّٰهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ كَمَا صَلَّيْتَ عَلَى آلِ إِبْرَاهِيْمَ، وَبَارِكْ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ كَمَا بَارَكْتَ عَلَى آلِ إِبْرَاهِيْمَ فِى الْعَالَمِيْنَ إِنَّكَ حَمِيْدٌ مَجِيْدٌ',
                'la' => 'Allāhumma ṣalli ‘alā Muḥammad wa ‘alā āli Muḥammad, kamā ṣallaita ‘alā āli Ibrāhīm, wa bārik ‘alā Muḥammad wa ‘alā āli Muḥammad, kamā bārakta ‘alā āli Ibrāhīm. Fīl-‘ālamīna innaka ḥamīdum majīd.',
                'td' => 'Ya Allah, limpahkanlah salawat kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau melimpahkan salawat kepada keluarga Ibrahim. Berilah berkah kepada Muhammad dan keluarga Muhammad, sebagaimana Engkau memberi berkah kepada keluarga Ibrahim. Di seluruh alam, sesungguhnya Engkau Maha Terpuji lagi Maha Mulia.',
                'src' => 'HR Muslim (dari Abū Mas‘ūd al-Anṣārī)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Doa Perlindungan',
                'ar' => 'اللّٰهُمَّ إِنِّى أَعُوْذُ بِكَ مِنْ عَذَابِ جَهَنَّمَ، وَمِنْ عَذَابِ الْقَبْرِ، وَمِنْ فِتْنَةِ الْمَحْيَا وَالْمَمَاتِ، وَمِنْ فِتْنَةِ الْمَسِيْحِ الدَّجَّالِ',
                'la' => 'Allāhumma innī a‘ūżu bika min ‘ażābi jahannam, wa min ‘ażābil-qabr, wa min fitnatil-maḥyā wal-mamāt, wa min fitnatil-masīḥid-dajjāl.',
                'td' => 'Ya Allah, sungguh aku berlindung kepada-Mu dari azab neraka Jahanam, dari azab kubur, dari fitnah kehidupan dan kematian, dan dari fitnah Al-Masih Dajjal.',
                'src' => 'HR Muslim (dari Abū Hurairah)',
                'm' => 'dewasa',
            ],
        ],
    ],
    [
        'urutan' => 13,
        'nama' => 'Salam',
        'slug' => 'salam',
        'deskripsi' => [
            'dewasa' => 'Menoleh ke kanan lalu ke kiri sambil mengucapkan salam, menandai berakhirnya sholat. Boleh dipilih salah satu lafal salam.',
            'anak' => 'Menoleh ke kanan dan ke kiri sambil mengucap salam.',
        ],
        'bacaan' => [
            [
                'judul' => 'Salam (lengkap)',
                'ar' => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ',
                'la' => 'As-salāmu ‘alaikum wa raḥmatullāhi wa barakātuh.',
                'td' => 'Semoga keselamatan, rahmat Allah, dan keberkahan-Nya tercurah atas kalian.',
                'src' => 'HR Abū Dāwūd (dari Wā’il Ibn Ḥujr)',
                'm' => 'dewasa',
            ],
            [
                'judul' => 'Salam',
                'ar' => 'اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ',
                'la' => 'As-salāmu ‘alaikum wa raḥmatullāh.',
                'td' => 'Semoga keselamatan dan rahmat Allah tercurah atas kalian.',
                'ta' => 'Semoga keselamatan dan rahmat Allah untuk kalian.',
                'src' => 'HR Muslim dan Abū Dāwūd (dari Jābir Ibn Samurah)',
                'm' => 'both',
            ],
        ],
    ],
];
