<?php

/**
 * Turkish (Turkey) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['AdvancedSearchForm']['ALLWORDS'] = 'Tüm Kelimeler';
$lang['tr_TR']['AdvancedSearchForm']['ATLEAST'] = 'En Az Kelimelerden Biri';
$lang['tr_TR']['AdvancedSearchForm']['EXACT'] = 'Tam Anlatım';
$lang['tr_TR']['AdvancedSearchForm']['FROM'] = '\'dan';
$lang['tr_TR']['AdvancedSearchForm']['GO'] = 'Git';
$lang['tr_TR']['AdvancedSearchForm']['LASTUPDATED'] = 'Son Güncelleme';
$lang['tr_TR']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'SON GÜNCELLEME';
$lang['tr_TR']['AdvancedSearchForm']['PAGETITLE'] = 'Sayfa Başlığı';
$lang['tr_TR']['AdvancedSearchForm']['RELEVANCE'] = 'İlinti';
$lang['tr_TR']['AdvancedSearchForm']['SEARCHBY'] = 'ARAMA KRİTERİ';
$lang['tr_TR']['AdvancedSearchForm']['SORTBY'] = 'SIRALAMA KRİTERİ';
$lang['tr_TR']['AdvancedSearchForm']['TO'] = '\'a';
$lang['tr_TR']['AdvancedSearchForm']['WITHOUT'] = 'Kelimesiz';
$lang['tr_TR']['BankAccountField']['VALIDATIONJS'] = 'Lütfen geçerli bir banka numarası giriniz';
$lang['tr_TR']['BasicAuth']['ENTERINFO'] = 'Lütfen kullanıcı adı ve şifrenizi giriniz.';
$lang['tr_TR']['BasicAuth']['ERRORNOTADMIN'] = 'O kullanıcı, yönetici değildir';
$lang['tr_TR']['BasicAuth']['ERRORNOTREC'] = 'Kullanıcı adı / şifre hatalı';
$lang['tr_TR']['BBCodeParser']['ALIGNEMENT'] = 'Hizalama';
$lang['tr_TR']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'sağa hizalı';
$lang['tr_TR']['BBCodeParser']['BOLD'] = 'Kalın Yazı';
$lang['tr_TR']['BBCodeParser']['BOLDEXAMPLE'] = 'Kalın';
$lang['tr_TR']['BBCodeParser']['CODE'] = 'Kod Bloğu';
$lang['tr_TR']['BBCodeParser']['CODEDESCRIPTION'] = 'Düzenlenmemiş kod bloğu';
$lang['tr_TR']['BBCodeParser']['CODEEXAMPLE'] = 'Kod Bloğu';
$lang['tr_TR']['BBCodeParser']['COLORED'] = 'Renkli Yazı';
$lang['tr_TR']['BBCodeParser']['COLOREDEXAMPLE'] = 'mavi yazı';
$lang['tr_TR']['BBCodeParser']['EMAILLINK'] = 'E-posta linki';
$lang['tr_TR']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'E-posta adresine link oluştur';
$lang['tr_TR']['BBCodeParser']['IMAGE'] = 'Resim';
$lang['tr_TR']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Girdinizde resim görüntüleyin';
$lang['tr_TR']['BBCodeParser']['ITALIC'] = 'Yatık Yazı';
$lang['tr_TR']['BBCodeParser']['ITALICEXAMPLE'] = 'Yatıklar';
$lang['tr_TR']['BBCodeParser']['LINK'] = 'Web sitesi linki';
$lang['tr_TR']['BBCodeParser']['LINKDESCRIPTION'] = 'Başka bir web sitesine ya da URL e link';
$lang['tr_TR']['BBCodeParser']['STRUCK'] = 'Üzeri Çizili Yazı';
$lang['tr_TR']['BBCodeParser']['STRUCKEXAMPLE'] = 'Üzeri Çizili';
$lang['tr_TR']['BBCodeParser']['UNDERLINE'] = 'Altı Çizili Yazı';
$lang['tr_TR']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Altı Çizili';
$lang['tr_TR']['BBCodeParser']['UNORDERED'] = 'Sıralanmamış liste';
$lang['tr_TR']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Sıralanmamış liste';
$lang['tr_TR']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'sıralanmamış madde 1';
$lang['tr_TR']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Parolanız değiştirildi:';
$lang['tr_TR']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Sisteme giriş yapabilmek için aşağıdaki kullanıcı bilgilerinizi kullanabilirsiniz:';
$lang['tr_TR']['ChangePasswordEmail.ss']['EMAIL'] = 'E-Posta';
$lang['tr_TR']['ChangePasswordEmail.ss']['HELLO'] = 'Merhaba';
$lang['tr_TR']['ChangePasswordEmail.ss']['PASSWORD'] = 'Parola';
$lang['tr_TR']['CMSMain']['DELETE'] = 'Taslak siteden kaldır';
$lang['tr_TR']['CMSMain']['DELETEFP'] = 'Yayındaki siteden kaldır';
$lang['tr_TR']['CMSMain']['RESTORE'] = 'Eski haline getir';
$lang['tr_TR']['CMSMain']['SAVE'] = 'Kaydet';
$lang['tr_TR']['ComplexTableField']['CLOSEPOPUP'] = 'Açılır Pencereyi Kapat';
$lang['tr_TR']['ComplexTableField.ss']['ADDITEM'] = '%s ekle';
$lang['tr_TR']['ComplexTableField.ss']['CSVEXPORT'] = 'CSV olarak dışa aktar';
$lang['tr_TR']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Hiçbir öğe bulunamadı';
$lang['tr_TR']['ComplexTableField.ss']['SORTASC'] = 'Sırala (artan)';
$lang['tr_TR']['ComplexTableField.ss']['SORTDESC'] = 'Sırala (azalan)';
$lang['tr_TR']['ComplexTableField']['SUCCESSADD'] = 'Eklendi %s %s %s';
$lang['tr_TR']['ComplexTableField']['SUCCESSEDIT'] = 'Kaydedildi %s %s %s';
$lang['tr_TR']['ComplexTableField_popup.ss']['NEXT'] = 'Sonraki';
$lang['tr_TR']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Önceki';
$lang['tr_TR']['CompositeDateField']['DAY'] = 'Gün';
$lang['tr_TR']['CompositeDateField']['DAYJS'] = 'gün';
$lang['tr_TR']['CompositeDateField']['MONTH'] = 'Ay';
$lang['tr_TR']['CompositeDateField']['MONTHJS'] = 'ay';
$lang['tr_TR']['CompositeDateField']['VALIDATIONJS1'] = 'Ayarladığızdan lütfen emin olun';
$lang['tr_TR']['CompositeDateField']['VALIDATIONJS2'] = 'doğru olarak.';
$lang['tr_TR']['CompositeDateField']['YEARJS'] = 'yıl';
$lang['tr_TR']['ConfirmedFormAction']['CONFIRMATION'] = 'Emin misiniz?';
$lang['tr_TR']['ConfirmedPasswordField']['ATLEAST'] = 'Şifre uzunluğu en az %s karakter olmalı.';
$lang['tr_TR']['ConfirmedPasswordField']['BETWEEN'] = 'Şifre uzunluğu %s ile %s karakter arası olmalı.';
$lang['tr_TR']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Şifreler aynı olmalı.';
$lang['tr_TR']['ConfirmedPasswordField']['LEASTONE'] = 'Şifre en az bir nümerik(0-9) ve bir alfanümerik(a-z) karakter içermeli.';
$lang['tr_TR']['ConfirmedPasswordField']['MAXIMUM'] = 'Şifre uzunluğu en fazla %s karakter olmalı.';
$lang['tr_TR']['ConfirmedPasswordField']['NOEMPTY'] = 'Şifreler boş bırakılamaz.';
$lang['tr_TR']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Parola Değiştir';
$lang['tr_TR']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Taslak veya arşivlenmiş içeriği görebilmek için CMS şifrenizle giriş yapmış olmanız gerekmektedir. <a href="%s">Yayınlanmış siteye geri dönmek için buraya tıklayın.</a>';
$lang['tr_TR']['Controller']['FILE'] = 'Dosya';
$lang['tr_TR']['Controller']['IMAGE'] = 'Resim';
$lang['tr_TR']['CreditCardField']['FIRST'] = 'ilk';
$lang['tr_TR']['CreditCardField']['FOURTH'] = 'dördüncü';
$lang['tr_TR']['CreditCardField']['SECOND'] = 'ikinci';
$lang['tr_TR']['CreditCardField']['THIRD'] = 'üçüncü';
$lang['tr_TR']['CreditCardField']['VALIDATIONJS1'] = 'Girdiğinizden lütfen emin olun';
$lang['tr_TR']['CreditCardField']['VALIDATIONJS2'] = 'kredi kartını doğru olarak.';
$lang['tr_TR']['CurrencyField']['CURRENCYSYMBOL'] = 'USD';
$lang['tr_TR']['CurrencyField']['VALIDATIONJS'] = 'Lütfen geçerli bir para birimi girin.';
$lang['tr_TR']['DataObject']['PLURALNAME'] = 'Data Nesneleri';
$lang['tr_TR']['DataObject']['SINGULARNAME'] = 'Data Nesnesi';
$lang['tr_TR']['Date']['DAY'] = 'gün';
$lang['tr_TR']['Date']['DAYS'] = 'gün';
$lang['tr_TR']['Date']['HOUR'] = 'saat';
$lang['tr_TR']['Date']['HOURS'] = 'saat';
$lang['tr_TR']['Date']['MIN'] = 'dakika';
$lang['tr_TR']['Date']['MINS'] = 'dakika';
$lang['tr_TR']['Date']['MONTH'] = 'ay';
$lang['tr_TR']['Date']['MONTHS'] = 'ay';
$lang['tr_TR']['Date']['SEC'] = 'saniye';
$lang['tr_TR']['Date']['SECS'] = 'saniye';
$lang['tr_TR']['Date']['TIMEDIFFAGO'] = '%s önce';
$lang['tr_TR']['Date']['TIMEDIFFAWAY'] = '%s sonra';
$lang['tr_TR']['Date']['YEAR'] = 'yıl';
$lang['tr_TR']['Date']['YEARS'] = 'yıl';
$lang['tr_TR']['DateField']['NOTSET'] = 'ayarlanmamış';
$lang['tr_TR']['DateField']['TODAY'] = 'bugün';
$lang['tr_TR']['DateField']['VALIDATIONJS'] = 'Lütfen geçerli bir tarih formatı girin (GG-AA-YYYY).';
$lang['tr_TR']['DateField']['VALIDDATEFORMAT'] = 'Lütfen geçerli bir tarih biçimi giriniz (GG/AA/YYYY)';
$lang['tr_TR']['DMYDateField']['VALIDDATEFORMAT'] = 'Lütfen geçerli bir tarih formatı girin (GG-AA-YYYY).';
$lang['tr_TR']['DropdownField']['CHOOSE'] = '(Seçiniz)';
$lang['tr_TR']['EmailField']['VALIDATION'] = 'Lütfen bir eposta adresi giriniz';
$lang['tr_TR']['EmailField']['VALIDATIONJS'] = 'Lütfen e-posta adresini girin.';
$lang['tr_TR']['Email_BounceRecord']['PLURALNAME'] = 'Eposta Geri-dönüş Kayıtları';
$lang['tr_TR']['Email_BounceRecord']['SINGULARNAME'] = 'Eposta Geri-dönüş Kaydı';
$lang['tr_TR']['ErrorPage']['400'] = '400 - Hatalı İstek';
$lang['tr_TR']['ErrorPage']['401'] = '401 - Erişim Engellenmiş';
$lang['tr_TR']['ErrorPage']['403'] = '403 - Yasak';
$lang['tr_TR']['ErrorPage']['404'] = '404 - Bulunamadı';
$lang['tr_TR']['ErrorPage']['405'] = '405 - Bilinmeyen Metod';
$lang['tr_TR']['ErrorPage']['406'] = '406 - İstemciye Uygun Cevap Bulunamadı';
$lang['tr_TR']['ErrorPage']['407'] = '407 - Yetkili Sunucu Erişim Hatası';
$lang['tr_TR']['ErrorPage']['408'] = '408 - İstek Zaman Aşımı Hatası';
$lang['tr_TR']['ErrorPage']['409'] = '409 - Çakışma';
$lang['tr_TR']['ErrorPage']['410'] = '410 - En Saçma HTTP Hatası';
$lang['tr_TR']['ErrorPage']['411'] = '411 - Uzunluk Belirtilmemiş';
$lang['tr_TR']['ErrorPage']['412'] = '412 - Önşart Hatası';
$lang['tr_TR']['ErrorPage']['413'] = '413 - İstek Çok Büyük';
$lang['tr_TR']['ErrorPage']['414'] = '414 - İstek-URI Çok Uzun';
$lang['tr_TR']['ErrorPage']['415'] = '415 - Desteklenmeyen Medya Tipi';
$lang['tr_TR']['ErrorPage']['416'] = '416 - İstek Aralığı Tatmin Edici Değil';
$lang['tr_TR']['ErrorPage']['417'] = '417 - Beklenti Hatası';
$lang['tr_TR']['ErrorPage']['500'] = '500 - Dahili Sunucu Hatası';
$lang['tr_TR']['ErrorPage']['501'] = '501 - Uygulanmamış';
$lang['tr_TR']['ErrorPage']['502'] = '502 - Hatalı Arayapı';
$lang['tr_TR']['ErrorPage']['503'] = '503 - Servis Mevcut Değil';
$lang['tr_TR']['ErrorPage']['504'] = '504 - Arayapı Zaman Aşımı';
$lang['tr_TR']['ErrorPage']['505'] = '505 - HTTP Versiyonu Desteklenmiyor';
$lang['tr_TR']['ErrorPage']['CODE'] = 'Hata kodu';
$lang['tr_TR']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Varolmayan bir sayfaya ulaşmaya çalışıyorsunuz.</p><p>Lütfen ulaşmak istediğiniz URL\'i kontrol edip tekrar deneyiniz.</p>';
$lang['tr_TR']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Sayfa bulunamadı';
$lang['tr_TR']['ErrorPage']['PLURALNAME'] = 'Hata Sayfaları';
$lang['tr_TR']['ErrorPage']['SINGULARNAME'] = 'Hata Sayfası';
$lang['tr_TR']['File']['Content'] = 'İçerik';
$lang['tr_TR']['File']['Filename'] = 'Dosya adı';
$lang['tr_TR']['File']['INVALIDEXTENSION'] = 'Bu uzantı kabul edilmemektedir (Geçerli Uzantı: %s)';
$lang['tr_TR']['File']['Name'] = 'Ad';
$lang['tr_TR']['File']['NOFILESIZE'] = 'Dosya boyutu sıfır (0) bayt.';
$lang['tr_TR']['File']['PLURALNAME'] = 'Dosyalar';
$lang['tr_TR']['File']['SINGULARNAME'] = 'Dosya';
$lang['tr_TR']['File']['Sort'] = 'Sırala';
$lang['tr_TR']['File']['Title'] = 'Başlık';
$lang['tr_TR']['File']['TOOLARGE'] = 'Dosya boyutu çok büyük, izin verilen maksimum boyut: %s';
$lang['tr_TR']['FileIFrameField']['NOTEADDFILES'] = 'İlk defa için kaydettiğiniz zaman dosyalar ekleyebilirsiniz.';
$lang['tr_TR']['Folder']['CREATED'] = 'İlk Yüklenmiş';
$lang['tr_TR']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Kullanılmamış thumbnail leri sil';
$lang['tr_TR']['Folder']['DELSELECTED'] = 'Seçili dosyaları sil';
$lang['tr_TR']['Folder']['DETAILSTAB'] = 'Detaylar';
$lang['tr_TR']['Folder']['FILENAME'] = 'Dosya adı';
$lang['tr_TR']['Folder']['FILESTAB'] = 'Dosyalar';
$lang['tr_TR']['Folder']['LASTEDITED'] = 'Son Güncellenmiş';
$lang['tr_TR']['Folder']['PLURALNAME'] = 'Dosyalar';
$lang['tr_TR']['Folder']['SINGULARNAME'] = 'Dosya';
$lang['tr_TR']['Folder']['TITLE'] = 'Başlık';
$lang['tr_TR']['Folder']['TYPE'] = 'Tip';
$lang['tr_TR']['Folder']['UNUSEDFILESTAB'] = 'Kullanılmamış dosyalar';
$lang['tr_TR']['Folder']['UNUSEDFILESTITLE'] = 'Kullanılmamış dosyalar';
$lang['tr_TR']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Kullanılmamış thumbnail ler';
$lang['tr_TR']['Folder']['UPLOADTAB'] = 'Yükle(upload)';
$lang['tr_TR']['Folder']['URL'] = 'URL';
$lang['tr_TR']['Folder']['VIEWASSET'] = 'Varlıkları Göster';
$lang['tr_TR']['Folder']['VIEWEDITASSET'] = 'Varlıkları Göster/Düzenle';
$lang['tr_TR']['ForgotPasswordEmail.ss']['HELLO'] = 'Merhaba';
$lang['tr_TR']['ForgotPasswordEmail.ss']['TEXT1'] = 'Profilinize ait';
$lang['tr_TR']['ForgotPasswordEmail.ss']['TEXT2'] = 'şifre sıfırlama linki';
$lang['tr_TR']['ForgotPasswordEmail.ss']['TEXT3'] = 'için';
$lang['tr_TR']['Form']['DATENOTSET'] = '(Tarih ayarlanmamış)';
$lang['tr_TR']['Form']['FIELDISREQUIRED'] = '%s alanının girilmesi zorunludur';
$lang['tr_TR']['Form']['LANGAOTHER'] = 'Diğer diller';
$lang['tr_TR']['Form']['LANGAVAIL'] = 'Kullanılabilir diller';
$lang['tr_TR']['Form']['NOTSET'] = '(ayarlanmamış)';
$lang['tr_TR']['Form']['VALIDATIONALLDATEVALUES'] = 'Tüm tarih alanlarını girdiğinize emin olunuz';
$lang['tr_TR']['Form']['VALIDATIONBANKACC'] = 'Lütfen geçerli bir banka numarası girin';
$lang['tr_TR']['Form']['VALIDATIONCREDITNUMBER'] = 'Lütfen %s kredi kartı numarasını doğru girdiğinizden emin olunuz.';
$lang['tr_TR']['Form']['VALIDATIONFAILED'] = 'Doğrulamada hata oluştu';
$lang['tr_TR']['Form']['VALIDATIONNOTUNIQUE'] = 'Girilen değer benzersiz olmalıdır';
$lang['tr_TR']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Şifre tekrarı hatalı';
$lang['tr_TR']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Şifreler boş geçilemez';
$lang['tr_TR']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Şifreler en az bir rakam ve bir alfanümerik karakter içermelidir.';
$lang['tr_TR']['Form']['VALIDATOR'] = 'Geçerlilik tespiti';
$lang['tr_TR']['Form']['VALIDCURRENCY'] = 'Lütfen geçerli bir para birimi giriniz.';
$lang['tr_TR']['FormField']['NONE'] = 'hiç';
$lang['tr_TR']['GhostPage']['NOLINKED'] = 'Bu sayfanın hiç bir linki yok';
$lang['tr_TR']['GhostPage']['PLURALNAME'] = 'Gizli Sayfalar';
$lang['tr_TR']['GhostPage']['SINGULARNAME'] = 'Gizli Sayfa';
$lang['tr_TR']['Group']['Code'] = 'Grup Kodu';
$lang['tr_TR']['Group']['Description'] = 'Açıklama';
$lang['tr_TR']['Group']['has_many_Permissions'] = 'İzinler';
$lang['tr_TR']['Group']['IPRestrictions'] = 'IP Adres Engellemeleri';
$lang['tr_TR']['Group']['Locked'] = 'Kilitli?';
$lang['tr_TR']['Group']['many_many_Members'] = 'Üyeler';
$lang['tr_TR']['Group']['Parent'] = 'Ana Grup';
$lang['tr_TR']['Group']['PLURALNAME'] = 'Gruplar';
$lang['tr_TR']['Group']['SINGULARNAME'] = 'Grup';
$lang['tr_TR']['Group']['Sort'] = 'Sırala';
$lang['tr_TR']['GSTNumberField']['VALIDATION'] = 'Lütfen geçerli bir GST numarası giriniz';
$lang['tr_TR']['GSTNumberField']['VALIDATIONJS'] = 'Lütfen geçerli bir GST Numarası giriniz';
$lang['tr_TR']['HtmlEditorField']['ALTTEXT'] = 'Tanım';
$lang['tr_TR']['HtmlEditorField']['ANCHOR'] = 'Çapa(yı) ekle/düzenle';
$lang['tr_TR']['HtmlEditorField']['ANCHORVALUE'] = 'Anchor(çapa)';
$lang['tr_TR']['HtmlEditorField']['BULLETLIST'] = 'Noktalı liste';
$lang['tr_TR']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Ortala';
$lang['tr_TR']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Yasla';
$lang['tr_TR']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Sola yasla';
$lang['tr_TR']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Sağa yasla';
$lang['tr_TR']['HtmlEditorField']['BUTTONBOLD'] = 'Kalın (Ctrl+B)';
$lang['tr_TR']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Flash Ekle';
$lang['tr_TR']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Resim ekle';
$lang['tr_TR']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Bağlantı ekle';
$lang['tr_TR']['HtmlEditorField']['BUTTONITALIC'] = 'İtalik (Ctrl+I)';
$lang['tr_TR']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Bağlantıyı sil';
$lang['tr_TR']['HtmlEditorField']['BUTTONSTRIKE'] = 'Üzeri çizili';
$lang['tr_TR']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Alt çizgi (Ctrl+U)';
$lang['tr_TR']['HtmlEditorField']['CAPTION'] = 'Altyazı olarak ekle';
$lang['tr_TR']['HtmlEditorField']['CHARMAP'] = 'Sembol ekle';
$lang['tr_TR']['HtmlEditorField']['CLOSE'] = 'kapat';
$lang['tr_TR']['HtmlEditorField']['COPY'] = 'Kopyala (Ctrl+C)';
$lang['tr_TR']['HtmlEditorField']['CREATEFOLDER'] = 'klasör oluştur';
$lang['tr_TR']['HtmlEditorField']['CSSCLASS'] = 'Hizalama / stil';
$lang['tr_TR']['HtmlEditorField']['CSSCLASSCENTER'] = 'Ortalanmış, kendi başına';
$lang['tr_TR']['HtmlEditorField']['CSSCLASSLEFT'] = 'Sol tarafta, metin ile çevrili.';
$lang['tr_TR']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Solda, kendisinde.';
$lang['tr_TR']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Sağ tarafta, metin ile çevrili';
$lang['tr_TR']['HtmlEditorField']['CUT'] = 'Kes (Ctrl+X)';
$lang['tr_TR']['HtmlEditorField']['DELETECOL'] = 'Kolon sil';
$lang['tr_TR']['HtmlEditorField']['DELETEROW'] = 'Satır sil';
$lang['tr_TR']['HtmlEditorField']['EDITCODE'] = 'HTML Kodunu Düzenle';
$lang['tr_TR']['HtmlEditorField']['EMAIL'] = 'Eposta adresi';
$lang['tr_TR']['HtmlEditorField']['FILE'] = 'Dosya';
$lang['tr_TR']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['tr_TR']['HtmlEditorField']['FOLDER'] = 'Klasör';
$lang['tr_TR']['HtmlEditorField']['FOLDERCANCEL'] = 'iptal';
$lang['tr_TR']['HtmlEditorField']['FORMATADDR'] = 'Adres';
$lang['tr_TR']['HtmlEditorField']['FORMATH1'] = 'Başlık 1';
$lang['tr_TR']['HtmlEditorField']['FORMATH2'] = 'Başlık 2';
$lang['tr_TR']['HtmlEditorField']['FORMATH3'] = 'Başlık 3';
$lang['tr_TR']['HtmlEditorField']['FORMATH4'] = 'Başlık 4';
$lang['tr_TR']['HtmlEditorField']['FORMATH5'] = 'Başlık 5';
$lang['tr_TR']['HtmlEditorField']['FORMATH6'] = 'Başlık 6';
$lang['tr_TR']['HtmlEditorField']['FORMATP'] = 'Paragraf';
$lang['tr_TR']['HtmlEditorField']['FORMATPRE'] = 'Önformatlı';
$lang['tr_TR']['HtmlEditorField']['HR'] = 'Yatay çizgi ekle';
$lang['tr_TR']['HtmlEditorField']['IMAGE'] = 'Resim';
$lang['tr_TR']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Boyutlar';
$lang['tr_TR']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Yükseklik';
$lang['tr_TR']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Genişlik';
$lang['tr_TR']['HtmlEditorField']['INDENT'] = 'Girinti arttır';
$lang['tr_TR']['HtmlEditorField']['INSERTCOLAFTER'] = 'Sağa kolon ekle';
$lang['tr_TR']['HtmlEditorField']['INSERTCOLBEF'] = 'Sola kolon ekle';
$lang['tr_TR']['HtmlEditorField']['INSERTROWAFTER'] = 'Alta satır ekle';
$lang['tr_TR']['HtmlEditorField']['INSERTROWBEF'] = 'Üste satır ekle';
$lang['tr_TR']['HtmlEditorField']['INSERTTABLE'] = 'Tablo ekle';
$lang['tr_TR']['HtmlEditorField']['LINK'] = 'Link';
$lang['tr_TR']['HtmlEditorField']['LINKANCHOR'] = 'Bu sayfadaki Anchor(çapa)';
$lang['tr_TR']['HtmlEditorField']['LINKDESCR'] = 'Bağlantı açıklaması';
$lang['tr_TR']['HtmlEditorField']['LINKEMAIL'] = 'Eposta adresi';
$lang['tr_TR']['HtmlEditorField']['LINKEXTERNAL'] = 'Başka bir sitedeki sayfa (dış bağlantı)';
$lang['tr_TR']['HtmlEditorField']['LINKFILE'] = 'Dosya indir';
$lang['tr_TR']['HtmlEditorField']['LINKINTERNAL'] = 'Bu sitedeki bir sayfa (iç bağlantı)';
$lang['tr_TR']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Bağlantı yeni bir pencerede mi açılsın?';
$lang['tr_TR']['HtmlEditorField']['LINKTEXT'] = 'Bağlantı metni';
$lang['tr_TR']['HtmlEditorField']['LINKTO'] = 'Bağlantı oluştur';
$lang['tr_TR']['HtmlEditorField']['OK'] = 'tamam';
$lang['tr_TR']['HtmlEditorField']['OL'] = 'Numaralandırılmış liste';
$lang['tr_TR']['HtmlEditorField']['OUTDENT'] = 'Çıkıntı azalt';
$lang['tr_TR']['HtmlEditorField']['PAGE'] = 'Sayfa';
$lang['tr_TR']['HtmlEditorField']['PASTE'] = 'Yapıştır (Ctrl+V)';
$lang['tr_TR']['HtmlEditorField']['PASTETEXT'] = 'Düz yazı yapıştır';
$lang['tr_TR']['HtmlEditorField']['PASTEWORD'] = 'Word\'den yapıştır';
$lang['tr_TR']['HtmlEditorField']['REDO'] = 'Tekrar yap (Ctrl+Y)';
$lang['tr_TR']['HtmlEditorField']['SEARCHFILENAME'] = 'Dosya adıyla ara';
$lang['tr_TR']['HtmlEditorField']['SELECTALL'] = 'Tümünu Seç (Ctrl+A)';
$lang['tr_TR']['HtmlEditorField']['UNDO'] = 'Geri al (Ctrl+Z)';
$lang['tr_TR']['HtmlEditorField']['UNLINK'] = 'Bağlantıyı sil';
$lang['tr_TR']['HtmlEditorField']['UPLOAD'] = 'sunucuya yükle';
$lang['tr_TR']['HtmlEditorField']['URL'] = 'URL';
$lang['tr_TR']['HtmlEditorField']['VISUALAID'] = 'Kılavuz kurallarını göster/gizle';
$lang['tr_TR']['Image']['PLURALNAME'] = 'Dosyalar';
$lang['tr_TR']['Image']['SINGULARNAME'] = 'Dosya';
$lang['tr_TR']['ImageField']['NOTEADDIMAGES'] = 'İlk kez kaydettikten sonra resim ekleyebilirsiniz';
$lang['tr_TR']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Dosya deposundan bir tane ile';
$lang['tr_TR']['ImageUploader']['ATTACH'] = '%s imajını ekle';
$lang['tr_TR']['ImageUploader']['DELETE'] = '%s imajını sil';
$lang['tr_TR']['ImageUploader']['FROMCOMPUTER'] = 'Bilgisayarınızdan';
$lang['tr_TR']['ImageUploader']['FROMFILESTORE'] = 'Dosya deposundan';
$lang['tr_TR']['ImageUploader']['ONEFROMCOMPUTER'] = 'Bilgisayarınızdan bir tane ile';
$lang['tr_TR']['ImageUploader']['REALLYDELETE'] = '%s\'i gerçekten silmek istiyor musunuz?';
$lang['tr_TR']['ImageUploader']['REPLACE'] = '%s ile yer değiştir';
$lang['tr_TR']['Image_Cached']['PLURALNAME'] = 'Dosyalar';
$lang['tr_TR']['Image_Cached']['SINGULARNAME'] = 'Dosya';
$lang['tr_TR']['Image_iframe.ss']['TITLE'] = 'Resim göndermek için gerekli IFrame';
$lang['tr_TR']['LoginAttempt']['Email'] = 'Eposta Adresi';
$lang['tr_TR']['LoginAttempt']['IP'] = 'IP Adresi';
$lang['tr_TR']['LoginAttempt']['PLURALNAME'] = 'Giriş Denemeleri';
$lang['tr_TR']['LoginAttempt']['SINGULARNAME'] = 'Giriş Denemesi';
$lang['tr_TR']['LoginAttempt']['Status'] = 'Durum';
$lang['tr_TR']['Member']['ADDRESS'] = 'Adres';
$lang['tr_TR']['Member']['belongs_many_many_Groups'] = 'Gruplar';
$lang['tr_TR']['Member']['BUTTONCHANGEPASSWORD'] = 'Şifreyi Değiştir';
$lang['tr_TR']['Member']['BUTTONLOGIN'] = 'Giriş';
$lang['tr_TR']['Member']['BUTTONLOGINOTHER'] = 'Başka bir kullanıcı olarak giriş yap';
$lang['tr_TR']['Member']['BUTTONLOSTPASSWORD'] = 'Şifremi kaybettim';
$lang['tr_TR']['Member']['CONFIRMNEWPASSWORD'] = 'Yeni Şifreyi Onayla';
$lang['tr_TR']['Member']['CONFIRMPASSWORD'] = 'Şifreyi Onayla';
$lang['tr_TR']['Member']['CONTACTINFO'] = 'İletişim Bilgisi';
$lang['tr_TR']['Member']['db_LastVisited'] = 'Son Ziyaret Tarihi';
$lang['tr_TR']['Member']['db_Locale'] = 'Arayüz Bölümü';
$lang['tr_TR']['Member']['db_LockedOutUntil'] = 'Şu tarihe kadar kapalı:';
$lang['tr_TR']['Member']['db_NumVisit'] = 'Ziyaret Sayısı';
$lang['tr_TR']['Member']['db_Password'] = 'Parola';
$lang['tr_TR']['Member']['db_PasswordExpiry'] = 'Parola için Son Geçerlilik Tarihi';
$lang['tr_TR']['Member']['EMAIL'] = 'Eposta';
$lang['tr_TR']['Member']['EMAILSIGNUPINTRO1'] = 'Kayıt olduğunuz için teşekkür ederiz. Üyelik detaylarınız aşağıdadır.';
$lang['tr_TR']['Member']['EMAILSIGNUPINTRO2'] = 'Aşağıdaki kullanıcı bilgileriniz ile web sitemize giriş yapabilirsiniz';
$lang['tr_TR']['Member']['EMAILSIGNUPSUBJECT'] = 'Kayıt olduğunuz için teşekkür ederiz';
$lang['tr_TR']['Member']['ENTEREMAIL'] = 'Lütfen parola belirleme linki almak için eposta adresi giriniz.';
$lang['tr_TR']['Member']['ERRORLOCKEDOUT'] = 'Çok miktarda başarısız oturum açma denemesinde bulunduğunuzdan dolayı hesabınız geçici olarak kullanım dışı bırakılmıştır. Lütfen 20 dakika bekleyip tekrar deneyiniz.';
$lang['tr_TR']['Member']['ERRORNEWPASSWORD'] = 'Yeni şifrenizin tekrarını farklı girdiniz, tekrar deneyin';
$lang['tr_TR']['Member']['ERRORPASSWORDNOTMATCH'] = 'Şu anki şifreniz doğru girilmedi, lütfen tekrar deneyin';
$lang['tr_TR']['Member']['ERRORWRONGCRED'] = 'Eposta adresi veya şifre hatalı. Lütfen tekrar deneyin.';
$lang['tr_TR']['Member']['FIRSTNAME'] = 'Ad';
$lang['tr_TR']['Member']['GREETING'] = 'Hoşgeldiniz';
$lang['tr_TR']['Member']['INTERFACELANG'] = 'Arayüz Dili';
$lang['tr_TR']['Member']['LOGGEDINAS'] = '%s olarak giriş yaptınız';
$lang['tr_TR']['Member']['MOBILE'] = 'Cep';
$lang['tr_TR']['Member']['NAME'] = 'Ad';
$lang['tr_TR']['Member']['NEWPASSWORD'] = 'Yeni Şifre';
$lang['tr_TR']['Member']['PASSWORD'] = 'Şifre';
$lang['tr_TR']['Member']['PASSWORDCHANGED'] = 'Şifreniz değiştirildi ve bir kopyası eposta adresinizi gönderildi.';
$lang['tr_TR']['Member']['PERSONALDETAILS'] = 'Kişisel Detaylar';
$lang['tr_TR']['Member']['PHONE'] = 'Telefon';
$lang['tr_TR']['Member']['PLURALNAME'] = 'Üyeler';
$lang['tr_TR']['Member']['PROFILESAVESUCCESS'] = 'Başarıyla kaydedildi.';
$lang['tr_TR']['Member']['REMEMBERME'] = 'Beni hatırla?';
$lang['tr_TR']['Member']['SECURITYGROUPS'] = 'Güvenlik grupları';
$lang['tr_TR']['Member']['SINGULARNAME'] = 'Üye';
$lang['tr_TR']['Member']['SUBJECTPASSWORDCHANGED'] = 'Parolanız değiştirildi';
$lang['tr_TR']['Member']['SUBJECTPASSWORDRESET'] = 'Parola değiştirme bağlantınız';
$lang['tr_TR']['Member']['SURNAME'] = 'Soyad';
$lang['tr_TR']['Member']['USERDETAILS'] = 'Kullanıcı Detayları';
$lang['tr_TR']['Member']['VALIDATIONMEMBEREXISTS'] = 'Bu eposta adresine sahip bir kullanıcı zaten bulunmaktadır';
$lang['tr_TR']['Member']['WELCOMEBACK'] = 'Tekrar hoşgeldiniz, %s';
$lang['tr_TR']['Member']['YOUROLDPASSWORD'] = 'Eski şifreniz';
$lang['tr_TR']['MemberAuthenticator']['TITLE'] = 'E-posta & Şifre';
$lang['tr_TR']['MemberPassword']['PLURALNAME'] = 'Üye Parolaları';
$lang['tr_TR']['MemberPassword']['SINGULARNAME'] = 'Üye Parolası';
$lang['tr_TR']['MyEntity']['MyNamespace'] = 'Anadilimde varsayılan değer';
$lang['tr_TR']['MyNamespace']['MYENTITY'] = '%s sayımı';
$lang['tr_TR']['NullableField']['IsNullLabel'] = 'Boş değer';
$lang['tr_TR']['NumericField']['VALIDATION'] = '\'%s\' bir sayı değil, bu alana bir sayı girmeniz gerekmektedir';
$lang['tr_TR']['NumericField']['VALIDATIONJS'] = 'numara değil, bu kutuda sadece numara kullanılabilir.';
$lang['tr_TR']['Page']['PLURALNAME'] = 'Sayfalar';
$lang['tr_TR']['Page']['SINGULARNAME'] = 'Sayfa';
$lang['tr_TR']['Permission']['FULLADMINRIGHTS'] = 'Tüm yönetici(administrator) hakları';
$lang['tr_TR']['Permission']['PERMSDEFINED'] = 'Aşağıdaki izin kodları tanımlanmıştır';
$lang['tr_TR']['Permission']['PLURALNAME'] = 'İzinler';
$lang['tr_TR']['Permission']['SINGULARNAME'] = 'İzin';
$lang['tr_TR']['PhoneNumberField']['VALIDATION'] = 'Lütfen geçerli bir telefon numarası giriniz';
$lang['tr_TR']['QueuedEmail']['PLURALNAME'] = 'Sırada Bekleyen Epostalar';
$lang['tr_TR']['QueuedEmail']['SINGULARNAME'] = 'Sırada Bekleyen Eposta';
$lang['tr_TR']['RedirectorPage']['HASBEENSETUP'] = 'Yönlendirilecek yeri olmayan bir yönlendirme sayfası ayarlandı.';
$lang['tr_TR']['RedirectorPage']['HEADER'] = 'Bu sayfa, kullanıcıları başka bir sayfaya yönlendirir';
$lang['tr_TR']['RedirectorPage']['OTHERURL'] = 'Başka bir siteye ait URL';
$lang['tr_TR']['RedirectorPage']['PLURALNAME'] = 'Yönlendirici Sayfalar';
$lang['tr_TR']['RedirectorPage']['REDIRECTTO'] = 'Şuraya yönlendir';
$lang['tr_TR']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Başka bir site';
$lang['tr_TR']['RedirectorPage']['REDIRECTTOPAGE'] = 'Web sitenizdeki bir sayfa';
$lang['tr_TR']['RedirectorPage']['SINGULARNAME'] = 'Yönlendirici Sayfa';
$lang['tr_TR']['RedirectorPage']['YOURPAGE'] = 'Web sitenizdeki bir sayfa';
$lang['tr_TR']['RelationComplexTableField.ss']['ADD'] = 'Ekle';
$lang['tr_TR']['RelationComplexTableField.ss']['CSVEXPORT'] = 'CSV olarak dışa aktar';
$lang['tr_TR']['RelationComplexTableField.ss']['DELETE'] = 'sil';
$lang['tr_TR']['RelationComplexTableField.ss']['EDIT'] = 'düzenle';
$lang['tr_TR']['RelationComplexTableField.ss']['NOTFOUND'] = 'Herhangi bir öğe bulunamadı';
$lang['tr_TR']['RelationComplexTableField.ss']['SHOW'] = 'göster';
$lang['tr_TR']['SearchForm']['GO'] = 'Git';
$lang['tr_TR']['SearchForm']['SEARCH'] = 'Ara';
$lang['tr_TR']['Security']['ALREADYLOGGEDIN'] = 'Bu sayfaya erişim hakkınız yoktur. Eğer o sayfaya erişim hakkı olan başka bir hesabınız varsa, aşağıdaki formu kullanarak giriş yapınız.';
$lang['tr_TR']['Security']['BUTTONSEND'] = 'Gönder';
$lang['tr_TR']['Security']['CHANGEPASSWORDBELOW'] = 'Aşağıdaki formu kullanarak şifrenizi değiştirebilirsiniz.';
$lang['tr_TR']['Security']['CHANGEPASSWORDHEADER'] = 'Şifre değiştir';
$lang['tr_TR']['Security']['EMAIL'] = 'E-Posta:';
$lang['tr_TR']['Security']['ENCDISABLED1'] = 'Şifre kriptolama kullanımdan çıkarılmış!';
$lang['tr_TR']['Security']['ENCDISABLED2'] = 'Şifrelerinizi kriptolamak için eklemek suretiyle şifre ayarlarınızı değiştirin';
$lang['tr_TR']['Security']['ENCDISABLED3'] = 'mysite/_config.php dosyasına';
$lang['tr_TR']['Security']['ENCRYPT'] = 'Tüm şifreler kriptolanıyor';
$lang['tr_TR']['Security']['ENCRYPTEDMEMBERS'] = 'Bu üye için kriptolanmış kimlik &quot;';
$lang['tr_TR']['Security']['ENCRYPTWITH'] = 'Şifreler "%s" algoritması kullanılarak kriptolanacak';
$lang['tr_TR']['Security']['ENCRYPTWITHOUTSALT'] = 'güvenliği arttırmak için salt kullanmadan';
$lang['tr_TR']['Security']['ENCRYPTWITHSALT'] = 'güvenliği arttırmak için salt ile birlikte';
$lang['tr_TR']['Security']['ENTERNEWPASSWORD'] = 'Lütfen bir şifre giriniz.';
$lang['tr_TR']['Security']['ERRORPASSWORDPERMISSION'] = 'Şifrenizi değiştirebilmek için sisteme giriş yapmış olmanız gerekmektedir!';
$lang['tr_TR']['Security']['ID'] = 'ID:';
$lang['tr_TR']['Security']['IPADDRESSES'] = 'IP Adresleri';
$lang['tr_TR']['Security']['LOGGEDOUT'] = 'Çıkış yaptınız. Eğer tekrar giriş yapmak istiyorsanız lütfen kullanıcı bilgilerinizi giriniz.';
$lang['tr_TR']['Security']['LOGIN'] = 'Oturum aç';
$lang['tr_TR']['Security']['LOSTPASSWORDHEADER'] = 'Şifremi Kaybettim';
$lang['tr_TR']['Security']['NOTEPAGESECURED'] = 'O sayfaya erişim kısıtlanmıştır. Lütfen aşağıdaki formu kullanarak kullanıcı bilgilerinizi giriniz.';
$lang['tr_TR']['Security']['NOTERESETLINKINVALID'] = '<p>Parola belirleme linki geçersiz veya linkin süresi dolmuş.</p><p>Yeni bir tane talep etmek için <a href="%s">tıklayınız</a> veya değiştirmek için <a href="%s">giriş</a> yapınız.</p>';
$lang['tr_TR']['Security']['NOTERESETPASSWORD'] = 'E-posta adresinize şifrenizi sıfırlamanızı sağlayacak linki gönderebilmemiz için lütfen e-posta adresinizi giriniz';
$lang['tr_TR']['Security']['NOTHINGTOENCRYPT1'] = 'Kriptolanacak şifre yok';
$lang['tr_TR']['Security']['NOTHINGTOENCRYPT2'] = 'Şifresi kriptolanabilecek üye yok!';
$lang['tr_TR']['Security']['PASSWORDSENTHEADER'] = '\'%s\' adresine gönderildi';
$lang['tr_TR']['Security']['PASSWORDSENTTEXT'] = 'Teşekkür ederiz! \'%s\' adresine gönderildi';
$lang['tr_TR']['Security']['PERMFAILURE'] = 'Bu sayfaya girmek için yönetici(administrator) hakları gerekmektedir.
Lütfen aşağıya bilgilerinizi giriniz, size en kısa sürede cevap verilecektir.';
$lang['tr_TR']['SecurityAdmin']['ADVANCEDONLY'] = 'Bu kısım uzman kullanıcılar içindir. Daha fazla bilgi için <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">bu sayfaya</a> göz atınız.';
$lang['tr_TR']['SecurityAdmin']['CODE'] = 'Kod';
$lang['tr_TR']['SecurityAdmin']['GROUPNAME'] = 'Grup adı';
$lang['tr_TR']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Bu grubu belirli bir IP adresi aralığı için kısıtlayabilirsiniz. Her bir satıra bir IP aralığı girmelisiniz. IP aralıkları aşağıdaki formatlardan herhangi biri olabilir: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Eğer bu kutuya bir veya daha fazla IP aralığı girerseniz, sadece bu IP aralığındakı IP ye sahip üye bu grubunun haklarına ulaşabilir, fakat bu durum oturum açmasına engel olmaz, çünkü aynı üye IP kısıtlaması olmadan sisteme girmek isteyebilir.';
$lang['tr_TR']['SecurityAdmin']['MEMBERS'] = 'Üyeler';
$lang['tr_TR']['SecurityAdmin']['OPTIONALID'] = 'Isteğe bağlı ID';
$lang['tr_TR']['SecurityAdmin']['PERMISSIONS'] = 'İzinler';
$lang['tr_TR']['SecurityAdmin']['VIEWUSER'] = 'Kullanıcıyı Göster';
$lang['tr_TR']['SimpleImageField']['NOUPLOAD'] = 'Henüz Resim Yüklenmemiş';
$lang['tr_TR']['SiteTree']['ACCESSANYONE'] = 'Herkes';
$lang['tr_TR']['SiteTree']['ACCESSHEADER'] = 'Bu sayfayı kimler görüntüleyebilir?';
$lang['tr_TR']['SiteTree']['ACCESSLOGGEDIN'] = 'Giriş yapmış kullanıcılar';
$lang['tr_TR']['SiteTree']['ACCESSONLYTHESE'] = 'Sadece bu kişiler (listeden seçiniz)';
$lang['tr_TR']['SiteTree']['ADDEDTODRAFT'] = '"Taslak Site" ye eklendi';
$lang['tr_TR']['SiteTree']['ALLOWCOMMENTS'] = 'Bu sayfada yorumlara izin verilsin mi?';
$lang['tr_TR']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Bu içerik aynı zamanda %s bölümlerinin sanal sayfalarında yer alıyor.';
$lang['tr_TR']['SiteTree']['BUTTONCANCELDRAFT'] = 'Taslak değikliklerini iptal et';
$lang['tr_TR']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Taslağı sil ve şu an yayında olan sayfaya geri döndür';
$lang['tr_TR']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Kaydet ve Yayınla';
$lang['tr_TR']['SiteTree']['BUTTONUNPUBLISH'] = 'Yayından kaldır';
$lang['tr_TR']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Bu sayfayı yayından kaldır';
$lang['tr_TR']['SiteTree']['CHANGETO'] = '"%s" olarak değiştir';
$lang['tr_TR']['SiteTree']['Comments'] = 'Yorumlar';
$lang['tr_TR']['SiteTree']['Content'] = 'İçerik';
$lang['tr_TR']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Bu sayfayı kendi içeriğinizle doldurabilir, ya da bu sayfayı silip kendi sayfalarınızı oluşturabilirsiniz.<br /></p>';
$lang['tr_TR']['SiteTree']['DEFAULTABOUTTITLE'] = 'Hakkımızda';
$lang['tr_TR']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Bu sayfayı kendi içeriğinizle doldurabilir, ya da bu sayfayı silip kendi sayfalarınızı oluşturabilirsiniz.<br /></p>';
$lang['tr_TR']['SiteTree']['DEFAULTCONTACTTITLE'] = 'İletişim';
$lang['tr_TR']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>SilverStripe\'a hoşgeldiniz! Burası anasayfanız. <a href="admin/">Yönetim panelinden</a> bu sayfayı düzenleyebilirsiniz. Geliştirici dökümanlarına <a href="http://doc.silverstripe.com">buradan</a> ulaşabilir, veya <a href="http://doc.silverstripe.com/doku.php?id=tutorials">eğitim videolarını</a> izleyebilirsiniz.</p>';
$lang['tr_TR']['SiteTree']['DEFAULTHOMETITLE'] = 'Anasayfa';
$lang['tr_TR']['SiteTree']['EDITANYONE'] = 'CMS\'e giriş yapabilen herkes';
$lang['tr_TR']['SiteTree']['EDITHEADER'] = 'Bu sayfayı kimler düzenleyebilir?';
$lang['tr_TR']['SiteTree']['EDITONLYTHESE'] = 'Sadece bu kişiler (listeden seçiniz)';
$lang['tr_TR']['SiteTree']['Editors'] = 'Editör Grupları';
$lang['tr_TR']['SiteTree']['GROUP'] = 'Grup';
$lang['tr_TR']['SiteTree']['HASBROKENLINKS'] = 'Bu sayfada hatalı linkler var.';
$lang['tr_TR']['SiteTree']['has_one_Parent'] = 'Üst Sayfa';
$lang['tr_TR']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Alan Ad(lar)ı';
$lang['tr_TR']['SiteTree']['HomepageForDomain'] = 'Bu alanadı için ana sayfa';
$lang['tr_TR']['SiteTree']['HTMLEDITORTITLE'] = 'İçerik';
$lang['tr_TR']['SiteTree']['INHERIT'] = 'Üst sayfadan kalan';
$lang['tr_TR']['SiteTree']['many_many_BackLinkTracking'] = 'Geri bağlantı izi';
$lang['tr_TR']['SiteTree']['many_many_ImageTracking'] = 'İmaj izi';
$lang['tr_TR']['SiteTree']['many_many_LinkTracking'] = 'Bağlantı izi';
$lang['tr_TR']['SiteTree']['MENUTITLE'] = 'Navigasyon etiketi';
$lang['tr_TR']['SiteTree']['METADESC'] = 'Tanım';
$lang['tr_TR']['SiteTree']['METAEXTRA'] = 'Kişisel Meta Etiketleri';
$lang['tr_TR']['SiteTree']['METAHEADER'] = 'Arama motoru meta-etiketleri';
$lang['tr_TR']['SiteTree']['METAKEYWORDS'] = 'Anahtar kelimeler';
$lang['tr_TR']['SiteTree']['METATITLE'] = 'Başlık';
$lang['tr_TR']['SiteTree']['MODIFIEDONDRAFT'] = '"Taslak site" üzerinde değiştirildi';
$lang['tr_TR']['SiteTree']['NOBACKLINKS'] = 'Hiç bir sayfa bu sayfaya link vermemiştir.';
$lang['tr_TR']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Bu sayfayı şu alan adları için anasayfa olarak belirle: 
(Alan adlarını virgülle ayırınız)';
$lang['tr_TR']['SiteTree']['PAGESLINKING'] = 'Şu sayfalar bu sayfaya link vermişlerdir:';
$lang['tr_TR']['SiteTree']['PAGETITLE'] = 'Sayfa ismi';
$lang['tr_TR']['SiteTree']['PAGETYPE'] = 'Sayfa tipi';
$lang['tr_TR']['SiteTree']['PARENTID'] = 'Ana sayfa';
$lang['tr_TR']['SiteTree']['PARENTTYPE'] = 'Sayfa konumu';
$lang['tr_TR']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'Grupların işlem ve düzenlemelerinin kontrolü';
$lang['tr_TR']['SiteTree']['PLURALNAME'] = 'Site Ağaçları';
$lang['tr_TR']['SiteTree']['REMOVEDFROMDRAFT'] = '"Taslak Site" den kaldırıldı';
$lang['tr_TR']['SiteTree']['SHOWINMENUS'] = 'Menülerde gösterilsin mi?';
$lang['tr_TR']['SiteTree']['SHOWINSEARCH'] = 'Aramalarda gösterilsin mi?';
$lang['tr_TR']['SiteTree']['SINGULARNAME'] = 'Site Ağacı';
$lang['tr_TR']['SiteTree']['TABACCESS'] = 'Erişim';
$lang['tr_TR']['SiteTree']['TABBACKLINKS'] = 'Geriye Bağlantılar';
$lang['tr_TR']['SiteTree']['TABBEHAVIOUR'] = 'Davranış';
$lang['tr_TR']['SiteTree']['TABCONTENT'] = 'İçerik';
$lang['tr_TR']['SiteTree']['TABMAIN'] = 'Ana (Esas)';
$lang['tr_TR']['SiteTree']['TABMETA'] = 'Metadata';
$lang['tr_TR']['SiteTree']['TABREPORTS'] = 'Raporlar';
$lang['tr_TR']['SiteTree']['ToDo'] = 'Yapılacaklar';
$lang['tr_TR']['SiteTree']['TODOHELP'] = '


<p>Bunu kullanarak sitenizdeki içerik ile ilgili yapılması gereken işleri takip edebilirsiniz. Diğer sayfalarınızla birlikte yapılmasi gereken işleri görmek için soldaki "Site Raporlari\' penceresini açıp \'Yapılacaklar\' linkini seçiniz.</p>';
$lang['tr_TR']['SiteTree']['TOPLEVEL'] = 'Site İçeriği (Üst Seviye)';
$lang['tr_TR']['SiteTree']['URL'] = 'URL';
$lang['tr_TR']['SiteTree']['URLSegment'] = 'URL Kısmı';
$lang['tr_TR']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Başka bir sayfa bu URL\'yi kullanıyor. URL\'ler her sayfa için benzersiz olmalıdır. ';
$lang['tr_TR']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL\'ler sadece harflerden, sayılardan veya çizgilerden oluşur.';
$lang['tr_TR']['SiteTree']['Viewers'] = 'Görüntüleyici Grupları';
$lang['tr_TR']['TableField']['ISREQUIRED'] = '%s için \'%s\' gereklidir';
$lang['tr_TR']['TableField.ss']['ADD'] = 'Yeni bir satır ekle';
$lang['tr_TR']['TableField.ss']['CSVEXPORT'] = 'CSV olarak dışarı ver';
$lang['tr_TR']['TableListField']['CSVEXPORT'] = 'CSV olarak kaydet';
$lang['tr_TR']['TableListField']['PRINT'] = 'Yazdır';
$lang['tr_TR']['TableListField_PageControls.ss']['DISPLAYING'] = 'Görüntüleniyor';
$lang['tr_TR']['TableListField_PageControls.ss']['OF'] = '\'nin';
$lang['tr_TR']['TableListField_PageControls.ss']['TO'] = '\'a';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Birinciyi görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWLAST'] = 'Sonuncuyu görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Sonrakini görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Öncekini görüntüle';
$lang['tr_TR']['ToggleCompositeField.ss']['HIDE'] = 'Gizle';
$lang['tr_TR']['ToggleCompositeField.ss']['SHOW'] = 'Göster';
$lang['tr_TR']['ToggleField']['LESS'] = 'daha az';
$lang['tr_TR']['ToggleField']['MORE'] = 'daha fazla';
$lang['tr_TR']['Translatable']['CREATE'] = 'Yeni çeviri oluştur';
$lang['tr_TR']['Translatable']['CREATEBUTTON'] = 'Oluştur';
$lang['tr_TR']['Translatable']['EXISTING'] = 'Varolan çeviriler';
$lang['tr_TR']['Translatable']['NEWLANGUAGE'] = 'Yeni dil';
$lang['tr_TR']['Translatable']['TRANSLATIONS'] = 'Çeviriler';
$lang['tr_TR']['TreeSelectorField']['CANCEL'] = 'İptal';
$lang['tr_TR']['TreeSelectorField']['SAVE'] = 'Kaydet';
$lang['tr_TR']['TypeDropdown']['NONE'] = 'Hiçbiri';
$lang['tr_TR']['Versioned']['has_many_Versions'] = 'Versiyonlar';
$lang['tr_TR']['VirtualPage']['CHOOSE'] = 'Bağlantı vermek için bir sayfa seçiniz';
$lang['tr_TR']['VirtualPage']['EDITCONTENT'] = 'içeriği düzenlemek için buraya tıklayın';
$lang['tr_TR']['VirtualPage']['HEADER'] = 'Bu sanal bir sayfadır';
$lang['tr_TR']['VirtualPage']['PLURALNAME'] = 'Sanal Sayfalar';
$lang['tr_TR']['VirtualPage']['SINGULARNAME'] = 'Sanal Sayfa';
$lang['tr_TR']['Widget']['PLURALNAME'] = 'Zımbırtılar';
$lang['tr_TR']['Widget']['SINGULARNAME'] = 'Zımbırtı';
$lang['tr_TR']['WidgetArea']['PLURALNAME'] = 'Zımbırtı Bölümleri';
$lang['tr_TR']['WidgetArea']['SINGULARNAME'] = 'Zımbırtı Bölümü';

?>