<?php

/**
 * Indonesian (Indonesia) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('id_ID', $lang) && is_array($lang['id_ID'])) {
	$lang['id_ID'] = array_merge($lang['en_US'], $lang['id_ID']);
} else {
	$lang['id_ID'] = $lang['en_US'];
}

$lang['id_ID']['AdvancedSearchForm']['ALLWORDS'] = 'Semua kata-kata';
$lang['id_ID']['AdvancedSearchForm']['ATLEAST'] = 'Paling tidak salah satu dari kata-kata Ini';
$lang['id_ID']['AdvancedSearchForm']['EXACT'] = 'Kalimat persis';
$lang['id_ID']['AdvancedSearchForm']['FROM'] = 'Dari';
$lang['id_ID']['AdvancedSearchForm']['GO'] = 'Pergi';
$lang['id_ID']['AdvancedSearchForm']['LASTUPDATED'] = 'Terkahir kali dibaharui';
$lang['id_ID']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'TERAKHIR KALI DIBAHARUI';
$lang['id_ID']['AdvancedSearchForm']['PAGETITLE'] = 'Judul halaman';
$lang['id_ID']['AdvancedSearchForm']['RELEVANCE'] = 'Relevansi';
$lang['id_ID']['AdvancedSearchForm']['SEARCHBY'] = 'CARI BERDASARKAN';
$lang['id_ID']['AdvancedSearchForm']['SORTBY'] = 'SORTIR HASIL BERDASARKAN';
$lang['id_ID']['AdvancedSearchForm']['TO'] = 'Ke';
$lang['id_ID']['AdvancedSearchForm']['WITHOUT'] = 'Tanpa kata-kata ini';
$lang['id_ID']['BankAccountField']['VALIDATIONJS'] = 'Mohon masukkan nomer bank yang sah';
$lang['id_ID']['BasicAuth']['ENTERINFO'] = 'Harap masukkan username dan password.';
$lang['id_ID']['BasicAuth']['ERRORNOTADMIN'] = 'User tersebut bukan administrator.';
$lang['id_ID']['BasicAuth']['ERRORNOTREC'] = 'Username/password tidak dikenali';
$lang['id_ID']['BBCodeParser']['ALIGNEMENT'] = 'Penjajaran barisan';
$lang['id_ID']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'jajar kanan';
$lang['id_ID']['BBCodeParser']['BOLD'] = 'Teks Tebal';
$lang['id_ID']['BBCodeParser']['BOLDEXAMPLE'] = 'Tebal';
$lang['id_ID']['BBCodeParser']['CODE'] = 'Blok Kode';
$lang['id_ID']['BBCodeParser']['CODEDESCRIPTION'] = 'Kode blok yang tidak diformat';
$lang['id_ID']['BBCodeParser']['CODEEXAMPLE'] = 'Blok kode';
$lang['id_ID']['BBCodeParser']['COLORED'] = 'Teks berwarna';
$lang['id_ID']['BBCodeParser']['COLOREDEXAMPLE'] = 'teks biru';
$lang['id_ID']['BBCodeParser']['EMAILLINK'] = 'Link email';
$lang['id_ID']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Membuat link ke alamat email';
$lang['id_ID']['BBCodeParser']['IMAGE'] = 'Gambar';
$lang['id_ID']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Tampilkan gambar di pos anda';
$lang['id_ID']['BBCodeParser']['ITALIC'] = 'Teks Miring';
$lang['id_ID']['BBCodeParser']['ITALICEXAMPLE'] = 'Miring';
$lang['id_ID']['BBCodeParser']['LINK'] = 'Link situs web';
$lang['id_ID']['BBCodeParser']['LINKDESCRIPTION'] = 'Link ke situs web atau URL lain';
$lang['id_ID']['BBCodeParser']['STRUCK'] = 'Text distrip';
$lang['id_ID']['BBCodeParser']['STRUCKEXAMPLE'] = 'Distrip';
$lang['id_ID']['BBCodeParser']['UNDERLINE'] = 'Teks Dengan Garis Bawah';
$lang['id_ID']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Digaris bawahi';
$lang['id_ID']['BBCodeParser']['UNORDERED'] = 'Daftar tak berurut';
$lang['id_ID']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Daftar tak berurut';
$lang['id_ID']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'barang 1';
$lang['id_ID']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Anda merubah password anda untuk';
$lang['id_ID']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Anda dapat menggunakan surat kepercayaan berikut untuk masuk:';
$lang['id_ID']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['id_ID']['ChangePasswordEmail.ss']['HELLO'] = 'Hai';
$lang['id_ID']['CMSMain']['DELETE'] = 'Hapus dari situs draft';
$lang['id_ID']['CMSMain']['DELETEFP'] = 'Hapus dari situs yang telah diterbitkan';
$lang['id_ID']['CMSMain']['RESTORE'] = 'Pulihkan';
$lang['id_ID']['CMSMain']['SAVE'] = 'Simpan';
$lang['id_ID']['ComplexTableField']['CLOSEPOPUP'] = 'Tutup popup';
$lang['id_ID']['ComplexTableField.ss']['ADDITEM'] = 'Tambahkan';
$lang['id_ID']['ComplexTableField.ss']['CSVEXPORT'] = 'Ekspor ke CSV';
$lang['id_ID']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Tidak ada item yang ditemukan';
$lang['id_ID']['ComplexTableField.ss']['SORTASC'] = 'Urut ascending';
$lang['id_ID']['ComplexTableField.ss']['SORTDESC'] = 'Urut descending';
$lang['id_ID']['ComplexTableField']['SUCCESSADD'] = 'Telah menambah %s %s %s';
$lang['id_ID']['ComplexTableField']['SUCCESSEDIT'] = 'Telah menyimpan %s %s %s';
$lang['id_ID']['ComplexTableField_popup.ss']['NEXT'] = 'Selanjutnya';
$lang['id_ID']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Sebelumnya';
$lang['id_ID']['CompositeDateField']['DAY'] = 'Hari';
$lang['id_ID']['CompositeDateField']['DAYJS'] = 'hari';
$lang['id_ID']['CompositeDateField']['MONTH'] = 'Bulan';
$lang['id_ID']['CompositeDateField']['MONTHJS'] = 'bulan';
$lang['id_ID']['CompositeDateField']['VALIDATIONJS1'] = 'Mohon pastikan anda telah set';
$lang['id_ID']['CompositeDateField']['VALIDATIONJS2'] = 'dengan benar.';
$lang['id_ID']['CompositeDateField']['YEARJS'] = 'tahun';
$lang['id_ID']['ConfirmedFormAction']['CONFIRMATION'] = 'Apakah anda yakin?';
$lang['id_ID']['ConfirmedPasswordField']['ATLEAST'] = 'Kata sandi harus sedikitnya %s karakter panjangnya.';
$lang['id_ID']['ConfirmedPasswordField']['BETWEEN'] = 'Panjang kata sandi harus %s sampai %s karakter panjangnya.';
$lang['id_ID']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Kata sandi harus sama.';
$lang['id_ID']['ConfirmedPasswordField']['LEASTONE'] = 'Kata sandi harus sedikitnya mempunyai satu karakter digit dan satu karakter alphanumeric.';
$lang['id_ID']['ConfirmedPasswordField']['MAXIMUM'] = 'Kata sandi harus maksimal %s karakter panjangnya.';
$lang['id_ID']['ConfirmedPasswordField']['NOEMPTY'] = 'Kata sandi tidak boleh kosong.';
$lang['id_ID']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Ganti Kata Sandi';
$lang['id_ID']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Anda harus masuk dengan password CMS Anda untuk melihat konten draft atau terarsip. <a href="%s">Klik di sini untuk kembali ke situs yang dipublikasi</a>';
$lang['id_ID']['Controller']['FILE'] = 'File';
$lang['id_ID']['Controller']['IMAGE'] = 'Gambar';
$lang['id_ID']['CreditCardField']['FIRST'] = 'pertama';
$lang['id_ID']['CreditCardField']['FOURTH'] = 'keempat';
$lang['id_ID']['CreditCardField']['SECOND'] = 'kedua';
$lang['id_ID']['CreditCardField']['THIRD'] = 'ketiga';
$lang['id_ID']['CreditCardField']['VALIDATIONJS1'] = 'Mohon pastikan anda telah memasukkan';
$lang['id_ID']['CreditCardField']['VALIDATIONJS2'] = 'nomer kartu kredit anda dengan benar.';
$lang['id_ID']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['id_ID']['CurrencyField']['VALIDATIONJS'] = 'Mohon masukkan mata uang yang sah.';
$lang['id_ID']['DataObject']['PLURALNAME'] = 'Objek-objek Data';
$lang['id_ID']['DataObject']['SINGULARNAME'] = 'Objek Data';
$lang['id_ID']['Date']['DAY'] = 'hari';
$lang['id_ID']['Date']['DAYS'] = 'hari';
$lang['id_ID']['Date']['HOUR'] = 'jam';
$lang['id_ID']['Date']['HOURS'] = 'jam';
$lang['id_ID']['Date']['MIN'] = 'menit';
$lang['id_ID']['Date']['MINS'] = 'menit';
$lang['id_ID']['Date']['MONTH'] = 'bulan';
$lang['id_ID']['Date']['MONTHS'] = 'bulan';
$lang['id_ID']['Date']['SEC'] = 'detik';
$lang['id_ID']['Date']['SECS'] = 'detik';
$lang['id_ID']['Date']['TIMEDIFFAGO'] = '%s lalu';
$lang['id_ID']['Date']['TIMEDIFFAWAY'] = '% tidak hadir';
$lang['id_ID']['Date']['YEAR'] = 'tahun';
$lang['id_ID']['Date']['YEARS'] = 'tahun';
$lang['id_ID']['DateField']['NOTSET'] = 'tidak diset';
$lang['id_ID']['DateField']['TODAY'] = 'hari ini';
$lang['id_ID']['DateField']['VALIDATIONJS'] = 'Mohon masukkan format tanggal yabg sah (TT/BB/TTTT).';
$lang['id_ID']['DateField']['VALIDDATEFORMAT'] = 'Harap masukkan  format tanggal yang valid (DD/MM/YYYY).';
$lang['id_ID']['DMYDateField']['VALIDDATEFORMAT'] = 'Mohon masukkan format tanggal yang sah (TT-BB-TTTT).';
$lang['id_ID']['DropdownField']['CHOOSE'] = '(Pilih)';
$lang['id_ID']['EmailField']['VALIDATION'] = 'Harap masukkan alamat email.';
$lang['id_ID']['EmailField']['VALIDATIONJS'] = 'Mohon masukkan alamat email.';
$lang['id_ID']['ErrorPage']['400'] = '400 - Permintaan buruk';
$lang['id_ID']['ErrorPage']['401'] = '401 - Tidak ada otorisasi';
$lang['id_ID']['ErrorPage']['403'] = '493 - Tidak ada ijin';
$lang['id_ID']['ErrorPage']['404'] = '404 - Tidak Ditemukan';
$lang['id_ID']['ErrorPage']['405'] = '405 - Metode Tidak Diperbolehkan';
$lang['id_ID']['ErrorPage']['406'] = '406 - Tidak Dapat Diterima';
$lang['id_ID']['ErrorPage']['407'] = '407 - Pembuktian diperlukan';
$lang['id_ID']['ErrorPage']['408'] = '408 - Permintaan Timeout';
$lang['id_ID']['ErrorPage']['409'] = '409 - Konflik';
$lang['id_ID']['ErrorPage']['410'] = '410 - Hilang';
$lang['id_ID']['ErrorPage']['411'] = '411 - Kepanjangan Diperlukan';
$lang['id_ID']['ErrorPage']['412'] = '412 - Prakondisi Gagal';
$lang['id_ID']['ErrorPage']['413'] = '413 - Permintaan Entity Terlalu Besar';
$lang['id_ID']['ErrorPage']['414'] = '414 - Permintaan-URI Terlalu Panjang';
$lang['id_ID']['ErrorPage']['415'] = '425 - Tipe Media Tidak Disupport';
$lang['id_ID']['ErrorPage']['416'] = '416 - Lingkup Permintaan Tidak Dapat Dipuaskan';
$lang['id_ID']['ErrorPage']['417'] = '417 - Expectation Gagal';
$lang['id_ID']['ErrorPage']['500'] = '500 - Server Internal Error';
$lang['id_ID']['ErrorPage']['501'] = '501 - Tidak Diimplementasi';
$lang['id_ID']['ErrorPage']['502'] = '502 - Gateway Buruk';
$lang['id_ID']['ErrorPage']['503'] = '503 - Servis Tidak Tersedia';
$lang['id_ID']['ErrorPage']['504'] = '504 - Gateway Timeout';
$lang['id_ID']['ErrorPage']['505'] = '505 - Versi HTTP Tidak Disupport';
$lang['id_ID']['ErrorPage']['CODE'] = 'Kode yang salah';
$lang['id_ID']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Maaf, sepertinya anda berusha mengakses halaman yang tidak ada.</p><p>Mohon periksa ejaan URL yang ingin anda akses dan coba lagi.</p>';
$lang['id_ID']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Halaman tidak ditemukan';
$lang['id_ID']['ErrorPage']['PLURALNAME'] = 'Halaman-halaman Kesalahan';
$lang['id_ID']['ErrorPage']['SINGULARNAME'] = 'Halaman Kesalahan';
$lang['id_ID']['File']['Content'] = 'Isi';
$lang['id_ID']['File']['Filename'] = 'Nama File';
$lang['id_ID']['File']['INVALIDEXTENSION'] = 'Extension tidak diperbolehkan (valid: %s)';
$lang['id_ID']['File']['Name'] = 'Nama';
$lang['id_ID']['File']['NOFILESIZE'] = 'Ukuran file adalah nol bytes.';
$lang['id_ID']['File']['PLURALNAME'] = 'File-file';
$lang['id_ID']['File']['SINGULARNAME'] = 'File';
$lang['id_ID']['File']['Sort'] = 'Urutan Sortir';
$lang['id_ID']['File']['Title'] = 'Judul';
$lang['id_ID']['File']['TOOLARGE'] = 'Ukuran File terlalu besar, maksimum %s diperbolehkan.';
$lang['id_ID']['FileIFrameField']['NOTEADDFILES'] = 'Anda dapat menambahkan file setelah anda simpan pertama kali.';
$lang['id_ID']['Folder']['CREATED'] = 'Uploaded Pertama Kali';
$lang['id_ID']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Hapus thumbnail-thumbnail yang tidal dipakai';
$lang['id_ID']['Folder']['DELSELECTED'] = 'Hapus file-file yang telah dipilih';
$lang['id_ID']['Folder']['DETAILSTAB'] = 'Perincian';
$lang['id_ID']['Folder']['FILENAME'] = 'Nama file';
$lang['id_ID']['Folder']['FILESTAB'] = 'File-file';
$lang['id_ID']['Folder']['LASTEDITED'] = 'Terakhir Kali Diperbaharui';
$lang['id_ID']['Folder']['PLURALNAME'] = 'File-file';
$lang['id_ID']['Folder']['SINGULARNAME'] = 'File';
$lang['id_ID']['Folder']['TITLE'] = 'Judul';
$lang['id_ID']['Folder']['TYPE'] = 'Tipe';
$lang['id_ID']['Folder']['UNUSEDFILESTAB'] = 'File-file yang tidak dipakai';
$lang['id_ID']['Folder']['UNUSEDFILESTITLE'] = 'File-file yang tidak dipakai';
$lang['id_ID']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Thumbnail-thumbnail yang tidak dipakai';
$lang['id_ID']['Folder']['UPLOADTAB'] = 'Upload';
$lang['id_ID']['Folder']['URL'] = 'URL';
$lang['id_ID']['Folder']['VIEWASSET'] = 'Tampilkan Aset';
$lang['id_ID']['Folder']['VIEWEDITASSET'] = 'Tampilkan/Edit Aset';
$lang['id_ID']['ForgotPasswordEmail.ss']['HELLO'] = 'Hai';
$lang['id_ID']['ForgotPasswordEmail.ss']['TEXT1'] = 'Inilah';
$lang['id_ID']['ForgotPasswordEmail.ss']['TEXT2'] = 'link untuk mereset kata sandi';
$lang['id_ID']['ForgotPasswordEmail.ss']['TEXT3'] = 'untuk';
$lang['id_ID']['Form']['DATENOTSET'] = '(Tidak ada tanggal yang diatur)';
$lang['id_ID']['Form']['FIELDISREQUIRED'] = '%s dibutuhkan';
$lang['id_ID']['Form']['LANGAOTHER'] = 'Bahasa lain';
$lang['id_ID']['Form']['LANGAVAIL'] = 'Bahasa yang disediakan';
$lang['id_ID']['Form']['NOTSET'] = '(tidak diatur)';
$lang['id_ID']['Form']['VALIDATIONALLDATEVALUES'] = 'Harap pastikan Anda telah mengatur semua nilai tanggal';
$lang['id_ID']['Form']['VALIDATIONBANKACC'] = 'Harap masukkan nomor bank yang valid';
$lang['id_ID']['Form']['VALIDATIONCREDITNUMBER'] = 'Harap pastikan anda memasukkan nomor kartu kredit %s secara benar.';
$lang['id_ID']['Form']['VALIDATIONFAILED'] = 'Validasi gagal';
$lang['id_ID']['Form']['VALIDATIONNOTUNIQUE'] = 'Harga yang dimasukkan tidak unik';
$lang['id_ID']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Password tidak cocok';
$lang['id_ID']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Password tidak boleh kosong';
$lang['id_ID']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Password harus memiliki setidaknya satu digit dan satu karakter alfanumerik (alphanumeric character).';
$lang['id_ID']['Form']['VALIDATOR'] = 'Pengesah';
$lang['id_ID']['Form']['VALIDCURRENCY'] = 'Harap masukkan mata uang yang valid.';
$lang['id_ID']['FormField']['NONE'] = 'tidak ada';
$lang['id_ID']['GhostPage']['NOLINKED'] = 'Halaman hantu ini tidak memiliki halaman yang terhubung.';
$lang['id_ID']['GhostPage']['PLURALNAME'] = 'Halaman-halaman ghost';
$lang['id_ID']['GhostPage']['SINGULARNAME'] = 'Halaman ghost';
$lang['id_ID']['Group']['Code'] = 'Kode Grup';
$lang['id_ID']['Group']['Description'] = 'Deskripsi';
$lang['id_ID']['Group']['has_many_Permissions'] = 'Ijin';
$lang['id_ID']['Group']['IPRestrictions'] = 'Restriksi alamat IP';
$lang['id_ID']['Group']['Locked'] = 'Terkunci?';
$lang['id_ID']['Group']['many_many_Members'] = 'Anggota-anggota';
$lang['id_ID']['Group']['Parent'] = 'Grup induk';
$lang['id_ID']['Group']['PLURALNAME'] = 'Grup-grup';
$lang['id_ID']['Group']['SINGULARNAME'] = 'Grup';
$lang['id_ID']['Group']['Sort'] = 'Urutan Sortir';
$lang['id_ID']['GSTNumberField']['VALIDATION'] = 'Harap masukkan Nomor GST yang valid';
$lang['id_ID']['GSTNumberField']['VALIDATIONJS'] = 'Mohon masukkan Nomer Pajak yang sah';
$lang['id_ID']['HtmlEditorField']['ALTTEXT'] = 'Deskripsi';
$lang['id_ID']['HtmlEditorField']['ANCHOR'] = 'Beri/edit anchor';
$lang['id_ID']['HtmlEditorField']['ANCHORVALUE'] = 'Anchor';
$lang['id_ID']['HtmlEditorField']['BULLETLIST'] = 'Susun dengan titik';
$lang['id_ID']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Rata tengah';
$lang['id_ID']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Rata kiri-kanan';
$lang['id_ID']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Rata kiri';
$lang['id_ID']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Rata kanan';
$lang['id_ID']['HtmlEditorField']['BUTTONBOLD'] = 'Tebal (Ctrl+B)';
$lang['id_ID']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Beri Flash';
$lang['id_ID']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Beri gambar';
$lang['id_ID']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Beri link';
$lang['id_ID']['HtmlEditorField']['BUTTONITALIC'] = 'Miring (Ctrl+I)';
$lang['id_ID']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Pindahkan link';
$lang['id_ID']['HtmlEditorField']['BUTTONSTRIKE'] = 'strikethrough';
$lang['id_ID']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Garisbawah (Ctrl+U)';
$lang['id_ID']['HtmlEditorField']['CHARMAP'] = 'Beri simbol';
$lang['id_ID']['HtmlEditorField']['CLOSE'] = 'tutup';
$lang['id_ID']['HtmlEditorField']['COPY'] = 'Copy (Ctrl+C)';
$lang['id_ID']['HtmlEditorField']['CREATEFOLDER'] = 'buat folder';
$lang['id_ID']['HtmlEditorField']['CSSCLASS'] = 'Aligmen/gaya';
$lang['id_ID']['HtmlEditorField']['CSSCLASSCENTER'] = 'Di tengah, sendiri';
$lang['id_ID']['HtmlEditorField']['CSSCLASSLEFT'] = 'Pada sebelah kiri, dengan teks disekitarnya';
$lang['id_ID']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Di sebelah kiri, sendirian.';
$lang['id_ID']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Pada sebelah kanan, dengan teks disekitarnya';
$lang['id_ID']['HtmlEditorField']['CUT'] = 'Cut (Ctrl+X)';
$lang['id_ID']['HtmlEditorField']['DELETECOL'] = 'Hapus kolom';
$lang['id_ID']['HtmlEditorField']['DELETEROW'] = 'Hapus baris';
$lang['id_ID']['HtmlEditorField']['EDITCODE'] = 'Edit Kode HTML';
$lang['id_ID']['HtmlEditorField']['EMAIL'] = 'Alamat email';
$lang['id_ID']['HtmlEditorField']['FILE'] = 'File';
$lang['id_ID']['HtmlEditorField']['FLASH'] = 'Beri flash';
$lang['id_ID']['HtmlEditorField']['FOLDER'] = 'Folder';
$lang['id_ID']['HtmlEditorField']['FOLDERCANCEL'] = 'batalkan';
$lang['id_ID']['HtmlEditorField']['FORMATADDR'] = 'Alamat';
$lang['id_ID']['HtmlEditorField']['FORMATH1'] = 'Heading 1';
$lang['id_ID']['HtmlEditorField']['FORMATH2'] = 'Heading 2';
$lang['id_ID']['HtmlEditorField']['FORMATH3'] = 'Heading 3';
$lang['id_ID']['HtmlEditorField']['FORMATH4'] = 'Heading 4';
$lang['id_ID']['HtmlEditorField']['FORMATH5'] = 'Heading 5';
$lang['id_ID']['HtmlEditorField']['FORMATH6'] = 'Heading 6';
$lang['id_ID']['HtmlEditorField']['FORMATP'] = 'Paragraf';
$lang['id_ID']['HtmlEditorField']['FORMATPRE'] = 'Praformat';
$lang['id_ID']['HtmlEditorField']['HR'] = 'Beri garis horisontal';
$lang['id_ID']['HtmlEditorField']['IMAGE'] = 'Beri gambar';
$lang['id_ID']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensi';
$lang['id_ID']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Tinggi';
$lang['id_ID']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Lebar';
$lang['id_ID']['HtmlEditorField']['INDENT'] = 'Tambahi indent (geser tulisan ke kanan)';
$lang['id_ID']['HtmlEditorField']['INSERTCOLAFTER'] = 'Beri kolom sesudahnya';
$lang['id_ID']['HtmlEditorField']['INSERTCOLBEF'] = 'Beri kolom sebelumnya';
$lang['id_ID']['HtmlEditorField']['INSERTROWAFTER'] = 'Beri baris sesudahnya';
$lang['id_ID']['HtmlEditorField']['INSERTROWBEF'] = 'Beri baris sebelumnya';
$lang['id_ID']['HtmlEditorField']['INSERTTABLE'] = 'Beri tabel';
$lang['id_ID']['HtmlEditorField']['LINK'] = 'Beri/edit link untuk teks yang di-highlight';
$lang['id_ID']['HtmlEditorField']['LINKANCHOR'] = 'Anchor halaman ini';
$lang['id_ID']['HtmlEditorField']['LINKDESCR'] = 'Deskripsi link';
$lang['id_ID']['HtmlEditorField']['LINKEMAIL'] = 'Alamat email';
$lang['id_ID']['HtmlEditorField']['LINKEXTERNAL'] = 'Situs web lain';
$lang['id_ID']['HtmlEditorField']['LINKFILE'] = 'Download file';
$lang['id_ID']['HtmlEditorField']['LINKINTERNAL'] = 'Halaman pada situs';
$lang['id_ID']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Buka link pada jendela baru?';
$lang['id_ID']['HtmlEditorField']['LINKTO'] = 'Link ke';
$lang['id_ID']['HtmlEditorField']['OK'] = 'ok';
$lang['id_ID']['HtmlEditorField']['OL'] = 'Susun dengan angka';
$lang['id_ID']['HtmlEditorField']['OUTDENT'] = 'Kurangi outdent (geser tulisan ke kiri)';
$lang['id_ID']['HtmlEditorField']['PAGE'] = 'Halaman';
$lang['id_ID']['HtmlEditorField']['PASTE'] = 'Paste (Ctrl+V)';
$lang['id_ID']['HtmlEditorField']['PASTETEXT'] = 'Paste dari teks biasa';
$lang['id_ID']['HtmlEditorField']['PASTEWORD'] = 'Paste dari Word';
$lang['id_ID']['HtmlEditorField']['REDO'] = 'Redo (Ctrl+Y)';
$lang['id_ID']['HtmlEditorField']['SEARCHFILENAME'] = 'Cari berdasarkan nama file';
$lang['id_ID']['HtmlEditorField']['SELECTALL'] = 'Pilih Semua (Ctrl+A)';
$lang['id_ID']['HtmlEditorField']['UNDO'] = 'Undo (Ctrl+Z)';
$lang['id_ID']['HtmlEditorField']['UNLINK'] = 'Pindahkan link';
$lang['id_ID']['HtmlEditorField']['UPLOAD'] = 'upload';
$lang['id_ID']['HtmlEditorField']['URL'] = 'URL';
$lang['id_ID']['HtmlEditorField']['VISUALAID'] = 'Perlihatkan/sembunyikan garis bantu';
$lang['id_ID']['Image']['PLURALNAME'] = 'File-file';
$lang['id_ID']['Image']['SINGULARNAME'] = 'File';
$lang['id_ID']['ImageField']['NOTEADDIMAGES'] = 'Anda dapat menambahkan gambar ketika Anda menyimpan untuk pertama kali.';
$lang['id_ID']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Dengan satu dari persediaan file';
$lang['id_ID']['ImageUploader']['ATTACH'] = 'Taruh %s';
$lang['id_ID']['ImageUploader']['DELETE'] = 'Hapus %s';
$lang['id_ID']['ImageUploader']['FROMCOMPUTER'] = 'Dari komputer Anda';
$lang['id_ID']['ImageUploader']['FROMFILESTORE'] = 'Dari persediaan file';
$lang['id_ID']['ImageUploader']['ONEFROMCOMPUTER'] = 'Dengan satu dari komputer Anda';
$lang['id_ID']['ImageUploader']['REALLYDELETE'] = 'Apakah Anda yakin untuk memindahkan %s ini?';
$lang['id_ID']['ImageUploader']['REPLACE'] = 'Gantikan %s';
$lang['id_ID']['Image_iframe.ss']['TITLE'] = 'Iframe Meng-upload Gambar';
$lang['id_ID']['LoginAttempt']['Email'] = 'Alamat Email';
$lang['id_ID']['LoginAttempt']['IP'] = 'Alamat IP';
$lang['id_ID']['LoginAttempt']['PLURALNAME'] = 'Login yang telah dicoba';
$lang['id_ID']['LoginAttempt']['SINGULARNAME'] = 'Login yang telah dicoba';
$lang['id_ID']['LoginAttempt']['Status'] = 'Status';
$lang['id_ID']['Member']['ADDRESS'] = 'Alamat';
$lang['id_ID']['Member']['belongs_many_many_Groups'] = 'Grup-grup';
$lang['id_ID']['Member']['BUTTONCHANGEPASSWORD'] = 'Ubah Password';
$lang['id_ID']['Member']['BUTTONLOGIN'] = 'Masuk';
$lang['id_ID']['Member']['BUTTONLOGINOTHER'] = 'Masuk sebagai orang lain';
$lang['id_ID']['Member']['BUTTONLOSTPASSWORD'] = 'Saya lupa password saya';
$lang['id_ID']['Member']['CONFIRMNEWPASSWORD'] = 'Membenarkan Password Baru';
$lang['id_ID']['Member']['CONFIRMPASSWORD'] = 'Membenarkan Password';
$lang['id_ID']['Member']['CONTACTINFO'] = 'Hubungi Bagian Informasi';
$lang['id_ID']['Member']['db_LastVisited'] = 'Tanggal Kunjungan Terakhir';
$lang['id_ID']['Member']['db_LockedOutUntil'] = 'Terkunci sampai';
$lang['id_ID']['Member']['db_NumVisit'] = 'Jumlah Kunjungan';
$lang['id_ID']['Member']['db_Password'] = 'Kata sandi';
$lang['id_ID']['Member']['db_PasswordExpiry'] = 'Tanggal Kata Sandi Berakhir';
$lang['id_ID']['Member']['EMAIL'] = 'E-mail';
$lang['id_ID']['Member']['EMAILSIGNUPINTRO1'] = 'Terima kasih untuk masuk sebagai member baru, detail Anda disusun di bawah ini untuk referensi yang akan datang.';
$lang['id_ID']['Member']['EMAILSIGNUPINTRO2'] = 'Anda dapat masuk ke dalam situs web dengan menggunakan surat kepercayaan yang disusun di bawah ini';
$lang['id_ID']['Member']['EMAILSIGNUPSUBJECT'] = 'Terima kasih telah masuk';
$lang['id_ID']['Member']['ENTEREMAIL'] = 'Mohon masukkan alamat email anda untuk mendapatkan link reset kata sandi anda.';
$lang['id_ID']['Member']['ERRORLOCKEDOUT'] = 'Account anda telah dimatikan untuk sementara karena terlalu banyak percobaan log in yang gagal. Mohon dicoba lagi dalam 20 menit.';
$lang['id_ID']['Member']['ERRORNEWPASSWORD'] = 'Anda memasukkan password baru secara berbeda, coba lagi';
$lang['id_ID']['Member']['ERRORPASSWORDNOTMATCH'] = 'Password Anda tidak cocok, coba lagi';
$lang['id_ID']['Member']['ERRORWRONGCRED'] = 'Ini tidak terlihat seperti alamat email atau password yang benar. Coba lagi.';
$lang['id_ID']['Member']['FIRSTNAME'] = 'Nama Depan';
$lang['id_ID']['Member']['GREETING'] = 'Selamat Datand';
$lang['id_ID']['Member']['INTERFACELANG'] = 'Bahasa Interface';
$lang['id_ID']['Member']['LOGGEDINAS'] = 'Anda masuk sebagai %s.';
$lang['id_ID']['Member']['MOBILE'] = 'Mobile';
$lang['id_ID']['Member']['NAME'] = 'Nama';
$lang['id_ID']['Member']['NEWPASSWORD'] = 'Password Baru';
$lang['id_ID']['Member']['PASSWORD'] = 'Password';
$lang['id_ID']['Member']['PASSWORDCHANGED'] = 'Password Anda telah diubah, dan akan di-email kepada Anda.';
$lang['id_ID']['Member']['PERSONALDETAILS'] = 'Rincian Personal';
$lang['id_ID']['Member']['PHONE'] = 'Telepon';
$lang['id_ID']['Member']['PLURALNAME'] = 'Anggota-anggota';
$lang['id_ID']['Member']['PROFILESAVESUCCESS'] = 'Telah disimpan dengan sukses.';
$lang['id_ID']['Member']['REMEMBERME'] = 'Ingat saya kali berikutnya?';
$lang['id_ID']['Member']['SECURITYGROUPS'] = 'Grup-grup sekuriti';
$lang['id_ID']['Member']['SINGULARNAME'] = 'Anggota';
$lang['id_ID']['Member']['SUBJECTPASSWORDCHANGED'] = 'Password Anda telah diubah';
$lang['id_ID']['Member']['SUBJECTPASSWORDRESET'] = 'Link mengubah total password Anda';
$lang['id_ID']['Member']['SURNAME'] = 'Nama Panggilan';
$lang['id_ID']['Member']['USERDETAILS'] = 'Rincian User';
$lang['id_ID']['Member']['VALIDATIONMEMBEREXISTS'] = 'Sudah ada member dengan email ini';
$lang['id_ID']['Member']['WELCOMEBACK'] = 'Selamat Datang Kembali, %s';
$lang['id_ID']['Member']['YOUROLDPASSWORD'] = 'Password lama Anda';
$lang['id_ID']['MemberAuthenticator']['TITLE'] = 'E-mail &amp; Password';
$lang['id_ID']['MemberPassword']['PLURALNAME'] = 'Kata-kata Sandi Anggota';
$lang['id_ID']['MemberPassword']['SINGULARNAME'] = 'Kata Sandi Anggota';
$lang['id_ID']['MoneyField']['FIELDLABELAMOUNT'] = 'Jumlah';
$lang['id_ID']['MoneyField']['FIELDLABELCURRENCY'] = 'Mata Uang';
$lang['id_ID']['NumericField']['VALIDATION'] = '\'%s\' bukan angka, hanya angka yang dapat diterima untuk field ini';
$lang['id_ID']['NumericField']['VALIDATIONJS'] = 'bukanlah sebuah angka, hanya angka yang bisa diterima di field ini ';
$lang['id_ID']['Page']['PLURALNAME'] = 'Halaman-halaman';
$lang['id_ID']['Page']['SINGULARNAME'] = 'Halaman';
$lang['id_ID']['Permission']['FULLADMINRIGHTS'] = 'Hak-hak administratif yang penuh';
$lang['id_ID']['Permission']['PERMSDEFINED'] = 'Kode-kode ijin berikut ini telah didefinisikan';
$lang['id_ID']['Permission']['PLURALNAME'] = 'Ijin-ijin';
$lang['id_ID']['Permission']['SINGULARNAME'] = 'Ijin';
$lang['id_ID']['PhoneNumberField']['VALIDATION'] = 'Harap masukkan nomor telepon yang valid';
$lang['id_ID']['QueuedEmail']['PLURALNAME'] = 'Antrian Email-email';
$lang['id_ID']['QueuedEmail']['SINGULARNAME'] = 'Antrian Email';
$lang['id_ID']['RedirectorPage']['HASBEENSETUP'] = 'halaman yang mengirim user ke alamat lain dibuat tanpa tujuan dari pengiriman itu sendiri';
$lang['id_ID']['RedirectorPage']['HEADER'] = 'Halaman ini akan mengarahkan user ke halaman lain';
$lang['id_ID']['RedirectorPage']['OTHERURL'] = 'URL situs web lain';
$lang['id_ID']['RedirectorPage']['PLURALNAME'] = 'Halaman-halaman Pengalihan';
$lang['id_ID']['RedirectorPage']['REDIRECTTO'] = 'Arahkan lagi ke';
$lang['id_ID']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Situs web yang lain';
$lang['id_ID']['RedirectorPage']['REDIRECTTOPAGE'] = 'Sebuah halaman pada situs web Anda';
$lang['id_ID']['RedirectorPage']['SINGULARNAME'] = 'Halaman Pengalihan';
$lang['id_ID']['RedirectorPage']['YOURPAGE'] = 'Halaman pada situs web Anda';
$lang['id_ID']['RelationComplexTableField.ss']['ADD'] = 'Tambah';
$lang['id_ID']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Ekspor ke CSV';
$lang['id_ID']['RelationComplexTableField.ss']['DELETE'] = 'hapus';
$lang['id_ID']['RelationComplexTableField.ss']['EDIT'] = 'edit';
$lang['id_ID']['RelationComplexTableField.ss']['NOTFOUND'] = 'Tidak ada barang yang diketemukan';
$lang['id_ID']['RelationComplexTableField.ss']['SHOW'] = 'tampilkan';
$lang['id_ID']['RemoveOrphanedPagesTask']['SELECTALL'] = 'pilih semua';
$lang['id_ID']['SearchForm']['GO'] = 'Pergi';
$lang['id_ID']['SearchForm']['SEARCH'] = 'Cari';
$lang['id_ID']['Security']['ALREADYLOGGEDIN'] = 'Anda tidak memiliki akses ke halaman ini. Jika anda memiliki keanggotaan yang dapat mengakses halaman ini, anda dapat masuk di bawah ini.';
$lang['id_ID']['Security']['BUTTONSEND'] = 'Kirimi saya link untuk mengeset ulang password ';
$lang['id_ID']['Security']['CHANGEPASSWORDBELOW'] = 'Anda dapat mengubah password anda di bawah ini.';
$lang['id_ID']['Security']['CHANGEPASSWORDHEADER'] = 'Ubah password anda';
$lang['id_ID']['Security']['EMAIL'] = 'E-Mail:';
$lang['id_ID']['Security']['ENCDISABLED1'] = 'Enkripsi kata sandi dimatikan!';
$lang['id_ID']['Security']['ENCDISABLED2'] = 'Untuk mengenkripsi password-password anda, ganti setting kata sandi dengan menambahkan';
$lang['id_ID']['Security']['ENCDISABLED3'] = 'to mysite/_config.php';
$lang['id_ID']['Security']['ENCRYPT'] = 'Mengenkripsi semua kata-kata sandi';
$lang['id_ID']['Security']['ENCRYPTEDMEMBERS'] = 'Kredensi yang telah dienkripsi untuk anggota &quot;';
$lang['id_ID']['Security']['ENCRYPTWITH'] = 'Kata-kata sandi akan dienkripsi dengan algoritma &quot;%s&quot;';
$lang['id_ID']['Security']['ENCRYPTWITHOUTSALT'] = 'tanpa menggunakan salt.';
$lang['id_ID']['Security']['ENCRYPTWITHSALT'] = 'dengan salt untuk meningkatkan keamanan.';
$lang['id_ID']['Security']['ENTERNEWPASSWORD'] = 'Harap masukkan password anda yang baru';
$lang['id_ID']['Security']['ERRORPASSWORDPERMISSION'] = 'Anda harus masuk terlebih dahulu untuk merubah password Anda!';
$lang['id_ID']['Security']['ID'] = 'ID:';
$lang['id_ID']['Security']['IPADDRESSES'] = 'Alamat-alamat IP';
$lang['id_ID']['Security']['LOGGEDOUT'] = 'Anda telah keluar. Jika Anda ingin masuk lagi, masukkan surat kepercayaan Anda di bawah ini.';
$lang['id_ID']['Security']['LOGIN'] = 'Log in';
$lang['id_ID']['Security']['LOSTPASSWORDHEADER'] = 'Password yang Hilang';
$lang['id_ID']['Security']['NOTEPAGESECURED'] = 'Halaman ini diamankan. Masukkan surat kepercayaan Anda di bawah ini dan kami akan mengirim Anda ke jalur yang benar.';
$lang['id_ID']['Security']['NOTERESETPASSWORD'] = 'Masukkan alamat e-mail anda dan kami akan mengirimi anda link yang dapat anda gunakan untuk mengeset ulang password ';
$lang['id_ID']['Security']['NOTHINGTOENCRYPT1'] = 'Tidak ada password untuk dienkripsi';
$lang['id_ID']['Security']['NOTHINGTOENCRYPT2'] = 'Tidak ada anggota dengan kata sandi teks biasa yang bisa dienkripsi!';
$lang['id_ID']['Security']['PASSWORDSENTHEADER'] = 'link untuk mengeset ulang password dikirim ke \'%s\'';
$lang['id_ID']['Security']['PASSWORDSENTTEXT'] = 'Terima kasih! Link untuk mengeset ulang password telah dikirim ke \'%s\'.';
$lang['id_ID']['Security']['PERMFAILURE'] = 'Halaman ini dikunci dan anda memerlukan hak-hak administrator untuk bisa mengakses ini.
Masukkan kredensi anda di bawah ini, lalu kami akan meneruskan anda.';
$lang['id_ID']['SecurityAdmin']['ADVANCEDONLY'] = 'Bagian ini untuk pengguna yang lebih mahir.
Lihat <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">halaman ini</a> untuk keterangan lebih lanjut.';
$lang['id_ID']['SecurityAdmin']['CODE'] = 'Kode';
$lang['id_ID']['SecurityAdmin']['GROUPNAME'] = 'Nama grup';
$lang['id_ID']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Anda bisa merestriksi grup ini ke dalam lingkup alamat IP secara khusus (satu lingkup per baris). <br />Lingkup-lingkup dapat dimasukkan dalam bentuk-bentuk sebagai berikut: <br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Jika anda masukkan satu lingkup alamat IP atau lebih ke dalam kotak ini, anggota-anggota hanya akan mempunyai hak-hak dalam grup ini jika mereka log on dari salah satu alamat-alamat IP yang disahkan. Ini tidak akan mencegah orang untuk log in. Hal ini dibiarkan karena pengguna yang sama mungkin harus log in untuk mengakses bagian-bagian dari sistem tanpa restriksi alamat IP.';
$lang['id_ID']['SecurityAdmin']['MEMBERS'] = 'Anggota-anggota';
$lang['id_ID']['SecurityAdmin']['OPTIONALID'] = 'ID opsional';
$lang['id_ID']['SecurityAdmin']['PERMISSIONS'] = 'Ijin-ijin';
$lang['id_ID']['SecurityAdmin']['VIEWUSER'] = 'Tampilkan Pengguna';
$lang['id_ID']['SimpleImageField']['NOUPLOAD'] = 'Tidak Ada Gambar yang Di-upload';
$lang['id_ID']['SiteTree']['ACCESSANYONE'] = 'Siapa saja';
$lang['id_ID']['SiteTree']['ACCESSHEADER'] = 'Siapa yang dapat melihat halaman ini pada situs saya?';
$lang['id_ID']['SiteTree']['ACCESSLOGGEDIN'] = 'User yang masuk';
$lang['id_ID']['SiteTree']['ACCESSONLYTHESE'] = 'Hanya orang ini saja (pilih dari daftar)';
$lang['id_ID']['SiteTree']['ADDEDTODRAFT'] = 'Ditambahkan ke situs draft';
$lang['id_ID']['SiteTree']['ALLOWCOMMENTS'] = 'Bolehkan komentar pada halaman ini?';
$lang['id_ID']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Konten ini juga tampil dalam halaman virtual dalam seksi %s.';
$lang['id_ID']['SiteTree']['BUTTONCANCELDRAFT'] = 'Batalkan perubahan draft';
$lang['id_ID']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Hapus draft dan kembalikan ke halaman yang sedang dipublikasikan';
$lang['id_ID']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Simpan & Publikasikan';
$lang['id_ID']['SiteTree']['BUTTONUNPUBLISH'] = 'Tidak Dipublikasi';
$lang['id_ID']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Pindahkan halaman ini dari situs yang dipublikasikan';
$lang['id_ID']['SiteTree']['CHANGETO'] = 'Ganti ke %s"';
$lang['id_ID']['SiteTree']['Comments'] = 'Komen-komen';
$lang['id_ID']['SiteTree']['Content'] = 'Isi';
$lang['id_ID']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Anda dapat mengisi halaman ini dengan isi anda sendiri, atau hapus dan buat halaman-halaman anda sendiri.<br /></p>';
$lang['id_ID']['SiteTree']['DEFAULTABOUTTITLE'] = 'Tentang Kami';
$lang['id_ID']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Anda dapat mengisi halaman ini dengan isi anda sendiri, atau hapus dan buat halaman-halaman anda sendiri.<br /></p>';
$lang['id_ID']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Hubungi Kami';
$lang['id_ID']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Selamat datang di SilverStripe! Ini adalah homepage default anda. Anda dapat mengedit halaman ini dengan membuka <a href="admin/">CMS ini</a>. Sekarang anda dapat mengakses <a href="http://doc.silverstripe.com">dokumentasi developer</a>, atau memulai <a href="http://doc.silverstripe.com/doku.php?id=tutorials">tutorial-tutorial yang tersedia.</a></p>';
$lang['id_ID']['SiteTree']['DEFAULTHOMETITLE'] = 'Home';
$lang['id_ID']['SiteTree']['DELETEDPAGE'] = 'Halaman yang telah dihapus';
$lang['id_ID']['SiteTree']['EDITANYONE'] = 'Siapa saja yang dapat masuk ke dalam CMS';
$lang['id_ID']['SiteTree']['EDITHEADER'] = 'Siapa yang dapat mengedit ini dari dalam CMS?';
$lang['id_ID']['SiteTree']['EDITONLYTHESE'] = 'Hanya orang ini saja (pilih dari daftar)';
$lang['id_ID']['SiteTree']['GROUP'] = 'Grup';
$lang['id_ID']['SiteTree']['HASBROKENLINKS'] = 'Halaman ini mempunyai link yang rusak';
$lang['id_ID']['SiteTree']['has_one_Parent'] = 'Halaman Induk';
$lang['id_ID']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domain';
$lang['id_ID']['SiteTree']['HTMLEDITORTITLE'] = 'Konten';
$lang['id_ID']['SiteTree']['MENUTITLE'] = 'Label navigasi';
$lang['id_ID']['SiteTree']['METADESC'] = 'Deskripsi';
$lang['id_ID']['SiteTree']['METAEXTRA'] = 'Custom Meta Tags';
$lang['id_ID']['SiteTree']['METAHEADER'] = 'Meta-tags Mesin Pencari';
$lang['id_ID']['SiteTree']['METAKEYWORDS'] = 'Kata kunci';
$lang['id_ID']['SiteTree']['METATITLE'] = 'Judul';
$lang['id_ID']['SiteTree']['MODIFIEDONDRAFT'] = 'Diubah di situs draft';
$lang['id_ID']['SiteTree']['NOBACKLINKS'] = 'Halaman ini tidak dihubungkan dari halaman apapun.';
$lang['id_ID']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Gunakan halaman ini sebagai \'home page\' untuk domain berikut:
(pisahkan domain yang berbeda dengan koma)';
$lang['id_ID']['SiteTree']['PAGESLINKING'] = 'Halaman berikut terhubung dengan halaman ini:';
$lang['id_ID']['SiteTree']['PAGETITLE'] = 'Nama Halaman';
$lang['id_ID']['SiteTree']['PAGETYPE'] = 'Tipe halaman';
$lang['id_ID']['SiteTree']['PARENTTYPE'] = 'Lokasi halaman';
$lang['id_ID']['SiteTree']['PLURALNAME'] = 'Silsilah-silsilah Situs';
$lang['id_ID']['SiteTree']['REMOVEDFROMDRAFT'] = 'Dipindahkan dari situs draft';
$lang['id_ID']['SiteTree']['SHOWINMENUS'] = 'Perlihatkan dalam menu?';
$lang['id_ID']['SiteTree']['SHOWINSEARCH'] = 'Perlihatkan dalam pencarian';
$lang['id_ID']['SiteTree']['SINGULARNAME'] = 'Silsilah Situs';
$lang['id_ID']['SiteTree']['TABACCESS'] = 'Akses';
$lang['id_ID']['SiteTree']['TABBACKLINKS'] = 'BackLinks';
$lang['id_ID']['SiteTree']['TABBEHAVIOUR'] = 'Perilaku';
$lang['id_ID']['SiteTree']['TABCONTENT'] = 'Kontain';
$lang['id_ID']['SiteTree']['TABMAIN'] = 'Utama';
$lang['id_ID']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['id_ID']['SiteTree']['TABREPORTS'] = 'Laporan';
$lang['id_ID']['SiteTree']['TODOHELP'] = '<p>Anda dapat menggunakan ini untuk memantau apa yang perlu dilakukan untuk isi situs anda. Untuk melihat semua halaman-halaman anda dengan informasi apa yang perlu dilakukan, bukalah window \'Site Reports\' di sebelah kiri dan pilih \'To Do\'</p>';
$lang['id_ID']['SiteTree']['TOPLEVEL'] = 'Konten Situs (Level Atas)';
$lang['id_ID']['SiteTree']['URL'] = 'URL';
$lang['id_ID']['SiteTree']['URLSegment'] = 'Segmen URL';
$lang['id_ID']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Halaman lain menggunakan URL tersebut. URL harus unik untuk setiap halaman';
$lang['id_ID']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL hanya dapat terdiri dari huruf, angka, dan tanda hubung.';
$lang['id_ID']['TableField']['ISREQUIRED'] = 'Dalam %s \'%s\' dibutuhkan.';
$lang['id_ID']['TableField.ss']['ADD'] = 'Tambah sebuah baris';
$lang['id_ID']['TableField.ss']['CSVEXPORT'] = 'Ekspor ke CSV';
$lang['id_ID']['TableListField']['CSVEXPORT'] = 'Ekspor ke CSV';
$lang['id_ID']['TableListField']['PRINT'] = 'Cetak';
$lang['id_ID']['TableListField_PageControls.ss']['DISPLAYING'] = 'Menampilkan';
$lang['id_ID']['TableListField_PageControls.ss']['OF'] = 'dari';
$lang['id_ID']['TableListField_PageControls.ss']['TO'] = 'ke';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Tampil pertama';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWLAST'] = 'Tampil terakhir';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Tampil berikutnya';
$lang['id_ID']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Tampil sebelumnya';
$lang['id_ID']['ToggleCompositeField.ss']['HIDE'] = 'Sembunyikan';
$lang['id_ID']['ToggleCompositeField.ss']['SHOW'] = 'Perlihatkan';
$lang['id_ID']['ToggleField']['LESS'] = 'kurang';
$lang['id_ID']['ToggleField']['MORE'] = 'lebih';
$lang['id_ID']['Translatable']['CREATE'] = 'Buat terjemahan baru';
$lang['id_ID']['Translatable']['CREATEBUTTON'] = 'Buat';
$lang['id_ID']['Translatable']['EXISTING'] = 'Terjemahan-terjemahan yang telah ada:';
$lang['id_ID']['Translatable']['NEWLANGUAGE'] = 'Bahasa baru';
$lang['id_ID']['Translatable']['TRANSLATIONS'] = 'Terjemahan-terjemahan';
$lang['id_ID']['TreeSelectorField']['CANCEL'] = 'tidak jadi';
$lang['id_ID']['TreeSelectorField']['SAVE'] = 'simpan';
$lang['id_ID']['TypeDropdown']['NONE'] = 'Tidak ada';
$lang['id_ID']['Versioned']['has_many_Versions'] = 'Versi-versi';
$lang['id_ID']['VirtualPage']['CHOOSE'] = 'Pilih halaman yang menghubungkan ke';
$lang['id_ID']['VirtualPage']['EDITCONTENT'] = 'klik disini untuk mengedit konten';
$lang['id_ID']['VirtualPage']['HEADER'] = 'Ini adalah halaman virtual';
$lang['id_ID']['VirtualPage']['PLURALNAME'] = 'Halaman-halaman Virtual';
$lang['id_ID']['VirtualPage']['SINGULARNAME'] = 'Halaman Virtual';
$lang['id_ID']['Widget']['PLURALNAME'] = 'Widget';
$lang['id_ID']['Widget']['SINGULARNAME'] = 'Widget';
$lang['id_ID']['WidgetArea']['PLURALNAME'] = 'Area-area Widget';
$lang['id_ID']['WidgetArea']['SINGULARNAME'] = 'Area Widget';

?>