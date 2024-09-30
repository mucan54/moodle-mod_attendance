<?php
// Bu dosya Moodle'in bir parçasıdır - http://moodle.org/
//
// Moodle, Özgür Yazılımdır: GNU Genel Kamu Lisansı'na uygun olarak
// dağıtılabilir ve/veya değiştirilebilir.
// Free Software Foundation tarafından yayımlanan lisansın 3. versiyonu
// veya daha sonrası kullanılabilir.
//
// Moodle, faydalı olacağı umuduyla dağıtılmaktadır, ancak HERHANGİ BİR GARANTİ
// OLMADAN, hatta PAZARLANABİLİRLİK veya BELİRLİ BİR AMACA UYGUNLUK İMA EDİLEN
// HERHANGİ BİR GARANTİ OLMADAN dağıtılmaktadır. Daha fazla ayrıntı için
// GNU Genel Kamu Lisansı'na bakınız.
//
// GNU Genel Kamu Lisansı'nın bir kopyasını almış olmalısınız.
// Eğer almadıysanız, http://www.gnu.org/licenses/ adresine bakabilirsiniz.

/**
 * 'attendance' bileşeni için dizeler, dil 'tr'
 *
 * @package   mod_attendance
 * @copyright  2011 Artem Andreev <andreev.artem@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 veya sonrası
 */

$string['Aacronym'] = 'A';
$string['Afull'] = 'Yok';
$string['Eacronym'] = 'İ';
$string['Efull'] = 'İzinli';
$string['Lacronym'] = 'G';
$string['Lfull'] = 'Geç';
$string['Pacronym'] = 'K';
$string['Pfull'] = 'Katıldı';
$string['absenteereport'] = 'Devamsızlık raporu';
$string['acronym'] = 'Kısaltma';
$string['add'] = 'Ekle';
$string['addedrecip'] = '{$a} yeni alıcı eklendi';
$string['addedrecips'] = '{$a} yeni alıcı eklendi';
$string['addmultiplesessions'] = 'Birden fazla oturum';
$string['addsession'] = 'Oturum ekle';
$string['adduser'] = 'Kullanıcı ekle';
$string['addwarning'] = 'Uyarı ekle';
$string['all'] = 'Hepsi';
$string['allcourses'] = 'Tüm kurslar';
$string['allowupdatestatus'] = 'Öğrencilerin kendi yoklamalarını güncellemelerine izin ver';
$string['allowupdatestatus_desc'] = 'İşaretlenirse, öğrenciler daha önce kendi bildirdikleri yoklamaları bir oturum için güncelleyebilirler.';
$string['allowupdatestatus_help'] = 'İşaretlenirse, öğrenciler daha önce kendi bildirdikleri yoklamaları bir oturum için güncelleyebilirler.';
$string['allpast'] = 'Geçmişin tamamı';
$string['allsessions'] = 'Tüm oturumlar';
$string['allsessionstotals'] = 'Seçilen oturumların toplamları';
$string['attendance:addinstance'] = 'Yeni bir yoklama aktivitesi ekle';
$string['attendance:canbelisted'] = 'Listeye dahil edilebilir';
$string['attendance:changeattendances'] = 'Yoklamaları değiştirme';
$string['attendance:changepreferences'] = 'Tercihleri değiştirme';
$string['attendance:export'] = 'Raporları dışa aktarma';
$string['attendance:import'] = 'Dosyadan oturumları içe aktarma (csv)';
$string['attendance:manageattendances'] = 'Yoklamaları yönetme';
$string['attendance:managetemporaryusers'] = 'Geçici kullanıcıları yönet';
$string['attendance:manualautomark'] = 'Manuel otomatik işaretleme işlemi';
$string['attendance:takeattendances'] = 'Yoklamaları alma';
$string['attendance:view'] = 'Yoklamaları görüntüleme';
$string['attendance:viewreports'] = 'Raporları görüntüleme';
$string['attendance:viewsummaryreports'] = 'Ders özet raporlarını görüntüleme';
$string['attendance:warningemails'] = 'Devamsız kullanıcılar ile ilgili e-postalara abone olabilir';
$string['attendance_already_submitted'] = 'Yoklamanız zaten ayarlandı.';
$string['attendance_no_status'] = 'Geçerli bir durum yok - yoklamayı kaydetmek için çok geç kalmış olabilirsiniz.';
$string['attendancedata'] = 'Yoklama verileri';
$string['attendancefile'] = 'Yoklama dosyası (csv formatı)';
$string['attendancefile_help'] = 'Dosya, kullanıcıyı ve yoklama zamanını belirten bir başlık satırı ve alanlara sahip bir CSV dosyası olmalıdır. Örneğin (email,scantime) veya (kullanıcıadı,zaman)';
$string['attendancegrade'] = 'Yoklama notu';
$string['attendancenotset'] = 'Yoklamanızı ayarlamanız gerekiyor';
$string['attendancenotstarted'] = 'Bu ders için yoklama henüz başlamadı';
$string['attendancepercent'] = 'Yoklama yüzdesi';
$string['attendancereport'] = 'Yoklama raporu';
$string['attendanceslogged'] = 'Yoklamalar kaydedildi';
$string['attendancestaken'] = 'Yoklamalar alındı';
$string['attendancesuccess'] = 'Yoklama başarıyla alındı';
$string['attendanceupdated'] = 'Yoklama başarıyla güncellendi';
$string['attendanceuserreport'] = 'Yoklama kullanıcı raporu';
$string['attforblockdirstillexists'] = 'eski mod/attforblock dizini hala var - bu güncellemeyi çalıştırmadan önce sunucunuzdaki bu dizini silmelisiniz.';
$string['attrecords'] = 'Yoklama kayıtları';
$string['autoassignstatus'] = 'Otomatik olarak en yüksek kullanılabilir durumu seç';
$string['autoassignstatus_help'] = 'Eğer bu seçilirse, öğrencilere otomatik olarak mevcut olan en yüksek puan atanacaktır.';
$string['automark'] = 'Otomatik işaretleme';
$string['automark_help'] = 'İşaretlemenin otomatik olarak tamamlanmasına izin ver.<br/>Eğer "Evet" seçilirse, öğrenciler kursa ilk erişimlerine göre otomatik olarak işaretlenecektir.<br/>Eğer "Oturumun sonunda işaretlenmemiş olarak ayarla" seçilirse, yoklamasını işaretlememiş olan öğrenciler işaretlenmemiş durumda olarak ayarlanacaktır.';
$string['automarkall'] = 'Evet';
$string['automarkclose'] = 'Oturum sonunda işaretlenmemiş olarak ayarla';
$string['automarkingcomplete'] = 'Otomatik işaretleme tamamlandı';
$string['automarkingnotavailableyet'] = 'Bu oturum, oturum kapanışında otomatik işaretlemeyi kullanıyor ve oturum henüz bitmedi.';
$string['automarkingnotenabled'] = 'Bu oturumda otomatik işaretleme etkin değil';
$string['automarktask'] = 'Otomatik işaretleme gerektiren yoklama oturumlarını kontrol et';
$string['automarkuseempty'] = 'Otomatik işaretleme durumu kullanılabilirlik işlemi';
$string['automarkuseempty_desc'] = 'Eğer işaretlenirse, boş/belirtilmemiş "kullanılabilirlik için" ayarına sahip durum öğelerine otomatik işaretleme sırasında izin verilecektir';
$string['autorecorded'] = 'sistem otomatik olarak kaydetti';
$string['availability'] = 'Kendi işaretlemeyi yapma kullanılabilirliği';
$string['availability_help'] = 'Bu durumun kullanılabilirliğini kısıtla.<br/>Eğer "Sınırlı" seçeneği seçilirse, bu durumun oturum başladıktan sonra kaç dakika süreyle kullanılabileceğini belirtin. Bu, öğrenciler kendi yoklamalarını işaretlediğinde geçerlidir.';
$string['availabilityalways'] = 'Her zaman';
$string['availabilitylimitedtime'] = 'Sınırlı süre';
$string['availabilityno'] = 'Hayır';
$string['availablebeforesession'] = 'Oturum başlamadan önce mevcut';
$string['availablebeforesession_help'] = 'Öğrenciler kendi yoklamalarını işaretlediğinde, bu durumun oturum başlamadan önce seçilmesine izin ver.';
$string['averageattendance'] = 'Ortalama yoklama';
$string['averageattendancegraded'] = 'Ortalama yoklama';
$string['backtoparticipants'] = 'Katılımcılar listesine geri dön';
$string['below'] = '{$a}%\'nin altında';
$string['calclose'] = 'Kapat';
$string['calendarevent'] = 'Oturum için takvim etkinliği oluştur';
$string['calendarevent_help'] = 'Etkinleştirilirse, bu oturum için bir takvim etkinliği oluşturulacaktır. Devre dışı bırakılırsa, bu oturum için var olan herhangi bir takvim etkinliği silinir.';
$string['caleventcreated'] = 'Oturum için takvim etkinliği başarıyla oluşturuldu';
$string['caleventdeleted'] = 'Oturum için takvim etkinliği başarıyla silindi';
$string['calmonths'] = 'Ocak,Şubat,Mart,Nisan,Mayıs,Haziran,Temmuz,Ağustos,Eylül,Ekim,Kasım,Aralık';
$string['calshow'] = 'Tarihi seç';
$string['calweekdays'] = 'Pa,Pt,Sa,Ça,Pe,Cu,Ct';
$string['cannottakeforgroup'] = '"{$a}" grubu için yoklama alamazsınız';
$string['cannottakethisgroup'] = 'Bu yoklama oturumu ile ilişkili olan ders grubunun bir üyesi değilsiniz, yoklamanız kaydedilmedi.';
$string['cantaddstatus'] = 'Yeni bir durum eklerken bir kısaltma ve açıklama belirtmelisiniz.';
$string['canthidestatus'] = 'Bu durumu gizleyemezsiniz çünkü bu yoklama aktivitesinde zaten kullanılıyor';
$string['categoryreport'] = 'Ders kategorisi raporu';
$string['changeattendance'] = 'Yoklamayı değiştir';
$string['changeduration'] = 'Süreyi değiştir';
$string['changesession'] = 'Oturumu değiştir';
$string['checkweekdays'] = 'Seçilen oturum tarih aralığına düşen hafta içi günlerini seçin.';
$string['closed'] = 'Bu oturum şu anda kendi işaretlemeniz için uygun değil';
$string['column'] = 'sütun';
$string['columnmap'] = 'Sütun eşleme';
$string['columnmap_help'] = 'Sunulan her bir alan için csv dosyasındaki karşılık gelen sütunu seçin.';
$string['columns'] = 'sütunlar';
$string['commonsession'] = 'Tüm öğrenciler';
$string['commonsessions'] = 'Tüm öğrenciler';
$string['confirm'] = 'Onayla';
$string['confirmcolumnmappings'] = 'Sütun eşlemelerini onayla';
$string['confirmdeletehiddensessions'] = 'Kurs başlangıç tarihinden önce ({$a->date}) planlanmış olan {$a->count} oturumu silmek istediğinizden emin misiniz?';
$string['confirmdeleteuser'] = 'Kullanıcıyı \'{$a->fullname}\' ({$a->email}) silmek istediğinizden emin misiniz?<br/>Tüm yoklama kayıtları kalıcı olarak silinecektir.';
$string['copyfrom'] = 'Yoklama verilerini buradan kopyala';
$string['countofselected'] = 'Seçilenlerin sayısı';
$string['course'] = 'Ders';
$string['coursemessage'] = 'Ders kullanıcılarına mesaj gönder';
$string['courseshortname'] = 'Ders kısa adı';
$string['coursesummary'] = 'Ders özet raporu';
$string['createmultiplesessions'] = 'Birden fazla oturum oluştur';
$string['createmultiplesessions_help'] = 'Bu işlev, basit bir adımda birden fazla oturum oluşturmanıza olanak tanır.
Oturumlar temel oturum tarihinden başlar ve \'tekrar\' tarihine kadar devam eder.

* <strong>Tekrar et</strong>: Sınıfınızın hangi günlerde toplanacağını seçin (örneğin Pazartesi/Çarşamba/Cuma).
* <strong>Her tekrar</strong>: Bir sıklık ayarı sağlar. Sınıfınız her hafta toplanacaksa 1\'i seçin; her iki haftada bir toplanacaksa 2\'yi seçin; her 3. hafta toplanacaksa 3\'ü seçin vb.
* <strong>Tekrar Tarihine Kadar</strong>: Yoklama almak istediğiniz son gün (dersin son günü) seçin.';
$string['createonesession'] = 'Ders için bir oturum oluştur';
$string['csvdelimiter'] = 'CSV ayırıcı';
$string['currentlyselectedusers'] = 'Şu anda seçili kullanıcılar';
$string['customexportfields'] = 'Özel kullanıcı profil alanlarını dışa aktar';
$string['customexportfields_help'] = 'Dışa aktarım raporunda gösterilecek ekstra özel kullanıcı profil alanları.';
$string['customfields'] = 'Özel oturum alanları';
$string['date'] = 'Tarih';
$string['days'] = 'Günler';
$string['defaultdisplaymode'] = 'Varsayılan görüntüleme modu';
$string['defaults'] = 'Varsayılanlar';
$string['defaultsessionsettings'] = 'Varsayılan oturum ayarları';
$string['defaultsessionsettings_help'] = 'Bu ayarlar, tüm yeni oturumlar için varsayılanları tanımlar';
$string['defaultsettings'] = 'Varsayılan yoklama ayarları';
$string['defaultsettings_help'] = 'Bu ayarlar, tüm yeni yoklamalar için varsayılanları tanımlar';
$string['defaultstatus'] = 'Varsayılan durum seti';
$string['defaultsubnet'] = 'Varsayılan ağ adresi';
$string['defaultsubnet_help'] = 'Yoklama kaydı, tam veya kısmi IP adreslerinin virgülle ayrılmış bir listesini belirterek belirli alt ağlarla sınırlandırılabilir. Bu, yeni oturumlar oluşturulurken varsayılan değerdir.';
$string['defaultview'] = 'Girişte varsayılan görünüm';
$string['defaultview_desc'] = 'Bu, öğretmenlere ilk girişte gösterilen varsayılan görünümdür.';
$string['defaultwarnings'] = 'Varsayılan uyarı seti';
$string['defaultwarningsettings'] = 'Varsayılan uyarı ayarları';
$string['defaultwarningsettings_help'] = 'Bu ayarlar, tüm yeni uyarılar için varsayılanları tanımlar';
$string['delete'] = 'Sil';
$string['deletecheckfull'] = '{$a}\'yı tamamen silmek istediğinizden emin misiniz, kullanıcı verileri dahil olmak üzere?';
$string['deletedgroup'] = 'Bu oturumla ilişkili grup silindi';
$string['deletehiddensessions'] = 'Tüm gizli oturumları sil';
$string['deletelogs'] = 'Yoklama verilerini sil';
$string['deleteselected'] = 'Seçilenleri sil';
$string['deletesession'] = 'Oturumu sil';
$string['deletesessions'] = 'Tüm oturumları sil';
$string['deleteuser'] = 'Kullanıcıyı sil';
$string['deletewarningconfirm'] = 'Bu uyarıyı silmek istediğinizden emin misiniz?';
$string['deletingsession'] = 'Ders için oturumu silme';
$string['deletingstatus'] = 'Ders için durumu silme';
$string['description'] = 'Açıklama';
$string['display'] = 'Görüntüle';
$string['displaymode'] = 'Görüntüleme modu';
$string['donotusepaging'] = 'Sayfalama kullanmayın';
$string['downloadexcel'] = 'Excel formatında indir';
$string['downloadooo'] = 'OpenOffice formatında indir';
$string['downloadtext'] = 'Metin formatında indir';
$string['duration'] = 'Süre';
$string['editsession'] = 'Oturumu düzenle';
$string['edituser'] = 'Kullanıcıyı düzenle';
$string['emailcontent'] = 'E-posta içeriği';
$string['emailcontent_default'] = 'Merhaba %userfirstname%,
%coursename% %attendancename% yoklama durumunuz %warningpercent%\'nin altına düştü ve şu anda %percent% seviyesinde - umarız iyisinizdir!

Bu dersten en iyi şekilde yararlanmak için yoklama durumunuzu iyileştirmeniz gerekiyor, daha fazla destek gerektiriyorsanız lütfen bizimle iletişime geçin.';
$string['emailcontent_help'] = 'Bir öğrenciye uyarı gönderildiğinde, bu alanın içeriği e-posta mesajı olarak kullanılır. Aşağıdaki joker karakterler kullanılabilir:
<ul>
    <li>%coursename%</li>
    <li>%userfirstname%</li>
    <li>%userlastname%</li>
    <li>%userid%</li>
    <li>%warningpercent%</li>
    <li>%attendancename%</li>
    <li>%cmid%</li>
    <li>%numtakensessions%</li>
    <li>%points%</li>
    <li>%maxpoints%</li>
    <li>%percent%</li>
</ul>';
$string['emailsubject'] = 'E-posta konusu';
$string['emailsubject_default'] = 'Yoklama uyarısı';
$string['emailsubject_help'] = 'Bir öğrenciye uyarı gönderildiğinde, bu alan e-posta mesajı başlığı olarak kullanılır.';
$string['emailuser'] = 'Kullanıcıya e-posta gönder';
$string['emailuser_help'] = 'İşaretlenirse, öğrenciye bir uyarı gönderilecektir.';
$string['emptyacronym'] = 'Boş kısaltmalara izin verilmez. Durum kaydı güncellenmedi.';
$string['emptydescription'] = 'Boş açıklamalara izin verilmez. Durum kaydı güncellenmedi.';
$string['enablecalendar'] = 'Takvim etkinliklerini oluştur';
$string['enablecalendar_desc'] = 'Eğer etkinleştirilirse, her yoklama oturumu için bir takvim etkinliği oluşturulacaktır. Bu ayarı değiştirdikten sonra takvimi sıfırlama raporunu çalıştırmanız gerekir.';
$string['enablewarnings'] = 'Uyarıları etkinleştir';
$string['enablewarnings_desc'] = 'Bu, bir yoklama için uyarı seti tanımlanmasına ve yoklama belirlenen eşik değerin altına düştüğünde kullanıcılara e-posta bildirimlerinin gönderilmesine izin verir.<br/><strong>UYARI: Bu yeni bir özellik olup, henüz geniş kapsamlı testlerden geçmemiştir. Lütfen kendi riskinizde kullanın ve forumlarda geri bildirimde bulunun.</strong>';
$string['encoding'] = 'Kodlama';
$string['encoding_help'] = 'Bu, öğrencilerin kimlik kartlarında kullanılan barkod kodlamasını ifade eder. Tipik barkod kodlama şemaları arasında Code-39, Code-128 ve UPC-A yer alır.';
$string['endofperiod'] = 'Dönemin sonu';
$string['endtime'] = 'Oturum bitiş saati';
$string['enrolmentend'] = 'Kullanıcı kaydı {$a} tarihinde sona eriyor';
$string['enrolmentstart'] = 'Kullanıcı kaydı {$a} tarihinde başlıyor';
$string['enrolmentsuspended'] = 'Kayıt askıya alındı';
$string['enterpassword'] = 'Şifreyi girin';
$string['error:coursehasnoattendance'] = 'Kısa adı {$a} olan dersin yoklama etkinlikleri yok.';
$string['error:coursenotfound'] = 'Kısa adı {$a} olan bir ders bulunamadı.';
$string['error:qrcode'] = 'Öğrencilerin kendi yoklamalarını kaydetmelerine izin verilmelidir; QR kodu kullanılamıyor! Atlanıyor.';
$string['error:sessioncourseinvalid'] = 'Oturum kursu geçersiz! Atlanıyor.';
$string['error:sessiondateinvalid'] = 'Oturum tarihi geçersiz! Atlanıyor.';
$string['error:sessionendinvalid'] = 'Oturum bitiş saati geçersiz! Atlanıyor.';
$string['error:sessionstartinvalid'] = 'Oturum başlangıç saati geçersiz! Atlanıyor.';
$string['error:statusnotfound'] = 'Kullanıcı: {$a->extuser}, bulunamayan bir durum değeri var: {$a->status}';
$string['error:timenotreadable'] = 'Kullanıcı: {$a->extuser}, strtotime tarafından dönüştürülemeyen bir tarama süresine sahip: {$a->scantime}';
$string['error:userduplicate'] = 'Kullanıcı {$a} içe aktarma sırasında iki kez bulundu. Lütfen her kullanıcı için yalnızca bir kayıt içeriği ekleyin.';
$string['error:usernotfound'] = '{$a->extuser} ayarıyla {$a->userfield} alanına sahip bir kullanıcı bu derste bulunamadı';
$string['errorgroupsnotselected'] = 'Bir veya daha fazla grup seçin';
$string['errorinaddingsession'] = 'Oturum ekleme hatası';
$string['erroringeneratingsessions'] = 'Oturum oluşturma hatası';
$string['eventdurationupdated'] = 'Oturum süresi güncellendi';
$string['eventreportviewed'] = 'Yoklama raporu görüntülendi';
$string['eventscreated'] = 'Takvim etkinlikleri oluşturuldu';
$string['eventsdeleted'] = 'Takvim etkinlikleri silindi';
$string['eventsessionadded'] = 'Oturum eklendi';
$string['eventsessiondeleted'] = 'Oturum silindi';
$string['eventsessionipshared'] = 'Yoklama kendi işaretleme IP çakışması';
$string['eventsessionsimported'] = 'Oturumlar içe aktarıldı';
$string['eventsessionupdated'] = 'Oturum güncellendi';
$string['eventstatusadded'] = 'Durum eklendi';
$string['eventstatusupdated'] = 'Durum güncellendi';
$string['eventstudentattendancesessionsupdated'] = 'Oturum raporu güncellendi';
$string['eventstudentattendancesessionsviewed'] = 'Oturum raporu görüntülendi';
$string['eventtaken'] = 'Yoklama alındı';
$string['eventtakenbystudent'] = 'Öğrenci tarafından yoklama alındı';
$string['export'] = 'Dışa aktar';
$string['extrarestrictions'] = 'Ekstra kısıtlamalar';
$string['formattexttype'] = 'Biçimlendirme';
$string['from'] = 'kimden:';
$string['gradebookexplanation'] = 'Not defterindeki not';
$string['gradebookexplanation_help'] = 'Yoklama modülü, bugüne kadar kazandığınız puanlara ve bugüne kadar kazanılabilecek puanlara dayalı olarak mevcut yoklama notunuzu gösterir; gelecekteki ders dönemlerini içermez. Not defterinde, yoklama notunuz mevcut yoklama yüzdesine ve dersin tamamı boyunca kazanılabilecek puanlara dayalıdır; gelecekteki ders dönemlerini de içerir. Bu nedenle, Yoklama modülünde ve not defterinde gösterilen yoklama notlarınız puan olarak aynı olmayabilir ancak aynı yüzdeyi ifade ederler.

Örneğin, bugüne kadar 10 puanın 8\'ini (yoklama yüzdesi %80) kazandıysanız ve dersin tamamında yoklama 50 puan değerindeyse, Yoklama modülü 8/10 olarak gösterirken, not defteri 40/50 olarak gösterir. Henüz 40 puan kazanmadınız ancak 40, mevcut yoklama yüzde değerinize karşılık gelen puan değeridir. Yoklama modülünde bugüne kadar kazandığınız puan değeri asla azalmaz çünkü bu yalnızca bugüne kadarki yoklamanıza dayanmaktadır; ancak gelecekteki yoklama durumunuza bağlı olarak not defterinde gösterilen yoklama puan değeri artabilir veya azalabilir, çünkü bu dersin tamamı için yoklamaya dayalıdır.';
$string['graded'] = 'Derecelendirilmiş oturumlar';
$string['gridcolumns'] = 'Grid sütunları';
$string['group'] = 'Grup';
$string['groups'] = 'Gruplar';
$string['groupsession'] = 'Öğrenci grubu';
$string['groupsessionsby'] = 'Grup oturumları tarafından';
$string['hiddensessions'] = 'Gizli oturumlar';
$string['hiddensessions_help'] = 'Ders başlangıç tarihinden önce planlanan oturumlar gizlidir.

Eski oturumları silmek yerine bu özelliği kullanarak gizleyebilirsiniz. Yalnızca görünür oturumlar Not Defteri\'nde görünecektir.';
$string['hiddensessionsdeleted'] = 'Tüm gizli oturumlar silindi';
$string['hideextrauserdetails'] = 'Ekstra kullanıcı ayrıntılarını gizle';
$string['hidensessiondetails'] = 'Oturum ayrıntılarını gizle';
$string['identifyby'] = 'Öğrenciyi tanımla';
$string['import'] = 'İçe aktar';
$string['importfile'] = 'Dosya içe aktar';
$string['importfile_help'] = 'CSV dosyası bir başlık satırı ve oturum tarihleriyle oluşturulacak oturumlar için grupları, zamanı ve oturum tarihlerini tanımlayan alanları içermelidir.<br/> Dosya yatırma işleminden sonra bir sonraki sayfada tüm alanların örneklerini gösterecektir, kendi alanlarınızı bu alanlara eşleyebilirsiniz.<br/>Örnek:<br/>groups;sessiondate;from;to<br/>groupA:05-10-2022;13:00;14:00<br/>groupB;05-10-2022;14:00;15:00';
$string['importsessions'] = 'Oturumları içe aktar';
$string['importstatus'] = 'Durum alanı';
$string['importstatus_help'] = 'Bu, içe aktarmada bir durum değeri dahil edilmesine izin verir - örneğin, P, G veya Y gibi değerler';
$string['includeabsentee'] = 'Devamsızlık raporunu hesaplarken oturumu dahil et';
$string['includeabsentee_help'] = 'İşaretlenirse, bu oturum devamsızlık raporu hesaplamalarına dahil edilecektir.';
$string['includeall'] = 'Tüm oturumları seç';
$string['includedescription'] = 'Oturum açıklamasını dahil et';
$string['includenottaken'] = 'Alınmayan oturumları dahil et';
$string['includeqrcode'] = 'QR kodunu dahil et';
$string['includeremarks'] = 'Açıklamaları dahil et';
$string['incorrectpassword'] = 'Yanlış bir şifre girdiniz ve yoklamanız kaydedilmedi, lütfen doğru şifreyi girin.';
$string['incorrectpasswordshort'] = 'Yanlış şifre, yoklama kaydedilmedi.';
$string['indetail'] = 'Ayrıntılı olarak...';
$string['indicator:cognitivedepth'] = 'Yoklama bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir Yoklama etkinliğinde ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'Yoklama bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında Yoklama\'nın sunduğu bilişsel etkileşimin şu yüzdesine ulaşmıştır (Düzeyler = Görülmedi, Görüldü)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Yoklama sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir Yoklama etkinliğinde ulaştığı sosyal genişliğe dayanmaktadır.';
$string['indicator:socialbreadthdef'] = 'Yoklama sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında Yoklama\'nın sunduğu sosyal etkileşimin şu yüzdesine ulaşmıştır (Düzeyler = Katılım yok, Katılımcı yalnız)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Bir işlem seçmelisiniz';
$string['invalidemails'] = 'Mevcut kullanıcı hesaplarının adreslerini belirtmelisiniz, bulunamadı: {$a}';
$string['invalidimportfile'] = 'Dosya formatı geçersiz.';
$string['invalidsessionenddate'] = 'Bu tarih oturum tarihinden önce olamaz';
$string['invalidsessionendtime'] = 'Bitiş saati, başlangıç saatinden büyük olmalıdır';
$string['invalidstatus'] = 'Geçersiz bir durum seçtiniz, lütfen tekrar deneyin';
$string['iptimemissing'] = 'Serbest bırakılacak dakika geçersiz';
$string['jumpto'] = 'Atla';
$string['keepsearching'] = 'Aramaya devam et';
$string['lasttaken'] = 'Son alınan yoklamalar';
$string['manualtriggerauto'] = 'Otomatik işaretlemeyi manuel olarak tetikle';
$string['marksessionimportcsvhelp'] = 'Bu form, bir kullanıcı tanımlayıcısı ve bir durumu içeren bir csv dosyasını yüklemenize olanak tanır - durum alanı, durum kısaltması veya bu kullanıcı için yoklama kaydedildiği zamandır. Bir zaman değeri geçirilirse, o zaman en yüksek mevcut notu atamaya çalışacaktır.';
$string['maxpossible'] = 'Maksimum mümkün';
$string['maxpossible_help'] = 'Henüz alınmamış (geçmiş ve gelecek) her oturumda kullanıcıların ulaşabileceği maksimum puanı gösterir:
<ul>
    <li><strong>Puanlar</strong>: tüm oturumlarda kullanıcıların ulaşabileceği maksimum puan.</li>
    <li><strong>Yüzde</strong>: tüm oturumlarda kullanıcıların ulaşabileceği maksimum yüzde.</li>
</ul>';
$string['maxpossiblepercentage'] = 'Maksimum mümkün yüzde';
$string['maxpossiblepoints'] = 'Maksimum mümkün puan';
$string['maxwarn'] = 'E-posta uyarılarının maksimum sayısı';
$string['maxwarn_help'] = 'Bir uyarının gönderilmesi gereken maksimum sayı (her oturum için yalnızca bir uyarı gönderilir)';
$string['mergeuser'] = 'Kullanıcıyı birleştir';
$string['messagedselecteduserfailed'] = 'Bir veya daha fazla kullanıcıya mesaj gönderilemedi. Daha fazla bilgi edinmek için hata ayıklamayı açın.';
$string['mobilesessionfrom'] = 'Son oturumlardan daha eski oturumları göster';
$string['mobilesessionfrom_help'] = 'Oturumları işaretlerken listeyi kısıtlamaya olanak tanır - yalnızca bu değerden sonraki oturumları gösterir';
$string['mobilesessionto'] = 'Gelecek oturumları göster';
$string['mobilesessionto_help'] = 'Listeyi kısıtlamaya ve yalnızca birkaç gelecekteki oturumu göstermeye olanak tanır.';
$string['mobilesettings'] = 'Mobil uygulama ayarları';
$string['mobilesettings_help'] = 'Bu ayarlar Moodle mobil uygulama davranışını kontrol eder';
$string['modulename'] = 'Yoklama';
$string['modulename_help'] = 'Yoklama aktivitesi modülü, bir öğretmenin sınıf sırasında yoklama almasına ve öğrencilerin kendi yoklama kayıtlarını görüntülemesine olanak tanır.

Öğretmen birden fazla oturum oluşturabilir ve yoklama durumunu "Katıldı", "Yok", "Geç" veya "İzinli" olarak işaretleyebilir veya ihtiyaçlarına uygun olarak durumları değiştirebilir.

Tüm sınıf veya bireysel öğrenciler için raporlar mevcuttur.';
$string['modulenameplural'] = 'Yoklamalar';
$string['months'] = 'Aylar';
$string['moreattendance'] = 'Bu sayfa için yoklama başarıyla alındı';
$string['moveleft'] = 'Sola kaydır';
$string['moveright'] = 'Sağa kaydır';
$string['multisessionexpanded'] = 'Birden fazla oturum genişletildi';
$string['multisessionexpanded_desc'] = 'Yeni oturum oluşturulurken "Birden fazla oturum" ayarlarını varsayılan olarak genişletilmiş şekilde gösterir.';
$string['mustselectusers'] = 'Dışa aktarmak için kullanıcılar seçilmelidir';
$string['name'] = 'Ad';
$string['newdate'] = 'Yeni tarih';
$string['newduration'] = 'Yeni süre';
$string['newstatusset'] = 'Yeni durum seti';
$string['noabsentstatusset'] = 'Kullanılmayan durumda kullanılacak durum seti mevcut değil.';
$string['noattendanceusers'] = 'Ders için öğrenci kaydı yapılmadığından veriler dışa aktarılamaz.';
$string['noattforuser'] = 'Bu kullanıcı için yoklama kaydı yok';
$string['noautomark'] = 'Devre dışı bırakıldı';
$string['nocapabilitytotakethisattendance'] = 'cmid: {$a} oturumu yoklamasında değişiklik yapma yetkiniz yoktur.';
$string['nodescription'] = 'Normal sınıf oturumu';
$string['noeventstoreset'] = 'Güncellenmesi gereken takvim etkinliği yok.';
$string['nogroups'] = 'Bu etkinlik grupları kullanacak şekilde ayarlandı ancak derste grup bulunmuyor.';
$string['noguest'] = 'Misafirler yoklamayı göremez';
$string['noofdaysabsent'] = 'Yok olunan gün sayısı';
$string['noofdaysexcused'] = 'İzinli olunan gün sayısı';
$string['noofdayslate'] = 'Geç kalınan gün sayısı';
$string['noofdayspresent'] = 'Katılınan gün sayısı';
$string['nosessiondayselected'] = 'Oturum günü seçilmedi';
$string['nosessionexists'] = 'Bu kurs için oturum yok';
$string['nosessionsselected'] = 'Seçilen oturum yok';
$string['notfound'] = 'Bu derste yoklama etkinliği bulunamadı!';
$string['notifytask'] = 'Kullanıcılara uyarı gönder';
$string['notmember'] = 'üye&nbsp;değil';
$string['notset'] = 'ayarlanmadı';
$string['nounmarkedstatusset'] = 'Bu oturum için yapılandırılmamış işaretlenmemiş bir durum var (id:{$a->sessionid}), bunu düzeltmek için <a href="{$a->url}">Durum setini</a> güncelleyin';
$string['noupgradefromthisversion'] = 'Yoklama modülü, attforblock sürümünden yükseltilemiyor. - lütfen attforblock\'ı silin veya en son sürüme yükseltin ve ardından yeni yoklama modülünü kurun';
$string['numsessions'] = 'Oturum sayısı';
$string['numsessionstaken'] = 'Alınan oturum sayısı';
$string['olddate'] = 'Eski tarih';
$string['onactivitycompletion'] = 'Etkinlik tamamlandığında';
$string['onlyselectedusers'] = 'Belirli kullanıcıları dışa aktar';
$string['overallsessions'] = 'Tüm oturumlar';
$string['overallsessions_help'] = 'Henüz alınmamış oturumlar da dahil olmak üzere tüm oturumlar için istatistikleri gösterir (geçmiş ve gelecek):
<ul>
    <li><strong>Oturumlar</strong>: toplam oturum sayısı.</li>
    <li><strong>Puanlar</strong>: alınan oturumlara dayalı puanlar.</li>
    <li><strong>Yüzde</strong>: alınan tüm oturumlar için maksimum puan üzerinden alınan yüzdelik puanlar.</li>
</ul>';
$string['oversessionstaken'] = 'Alınan oturumlar';
$string['oversessionstaken_help'] = 'Alınan oturumlar için istatistikleri gösterir:
<ul>
    <li><strong>Oturumlar</strong>: alınan oturum sayısı.</li>
    <li><strong>Puanlar</strong>: alınan oturumlara dayalı puanlar.</li>
    <li><strong>Yüzde</strong>: alınan oturumlar için maksimum puan üzerinden alınan yüzdelik puanlar.</li>
</ul>';
$string['pageof'] = 'Sayfa {$a->page} / {$a->numpages}';
$string['participant'] = 'Katılımcı';
$string['password'] = 'Şifre';
$string['passwordgrp'] = 'Öğrenci şifresi';
$string['passwordgrp_help'] = 'Ayarlandıysa, öğrenciler oturum için yoklama durumlarını işaretlemeden önce bu şifreyi girmelidir. Boş bırakılırsa, şifre gerekli değildir.';
$string['passwordheader'] = 'Yoklama almak için aşağıdaki şifreyi kullanın';
$string['passwordrequired'] = 'Yoklama durumunuzu göndermeden önce oturum şifresini girmelisiniz';
$string['percentage'] = 'Yüzde';
$string['percentageallsessions'] = 'Tüm oturumlar için yüzde';
$string['percentagesessionscompleted'] = 'Alınan oturumlar için yüzde';
$string['pluginadministration'] = 'Yoklama yönetimi';
$string['pluginname'] = 'Yoklama';
$string['points'] = 'Puanlar';
$string['pointsallsessions'] = 'Tüm oturumlar için puanlar';
$string['pointssessionscompleted'] = 'Alınan oturumlar için puanlar';
$string['preferences_desc'] = 'Durum setlerindeki değişiklikler mevcut yoklama oturumlarını etkileyecek ve notlandırmayı etkileyebilir.';
$string['preventsharederror'] = 'Bu cihazın başka bir öğrenci için yoklama kaydetmek amacıyla kullanıldığı tespit edildiği için oturum için kendi işaretleme devre dışı bırakıldı.';
$string['preventsharedip'] = 'Öğrencilerin aynı IP adresini paylaşmasını önle';
$string['preventsharedip_help'] = 'Öğrencilerin yoklama almak için aynı cihazı (IP adresi ile tanımlanan) kullanmalarını önleyin.';
$string['preventsharediptime'] = 'IP adresinin yeniden kullanımına izin verilen süre (dakika)';
$string['preventsharediptime_help'] = 'Bir IP adresinin, bu süre geçtikten sonra oturumda yoklama almak için yeniden kullanılmasına izin verin.';
$string['preview'] = 'Dosya önizlemesi';
$string['previewhtml'] = 'HTML formatı önizlemesi';
$string['priorto'] = 'Oturum tarihi ders başlangıç tarihinden önce ({$a}) ve bu tarihten önce planlanan yeni oturumlar gizlenecektir (erişilebilir olmayacaktır). Ders başlangıç tarihini istediğiniz zaman (ders ayarlarından) değiştirerek önceki oturumlara erişim sağlayabilirsiniz.<br><br>Lütfen oturum tarihini değiştirin veya sadece oturumu ekle butonuna tekrar tıklayın.';
$string['privacy:metadata:attendancelog'] = 'Kaydedilen kullanıcı yoklamalarının günlüğü.';
$string['privacy:metadata:attendancesessions'] = 'Yoklama kaydedilecek oturumlar.';
$string['privacy:metadata:attendancewarningdone'] = 'Kullanıcılara yoklama kayıtları hakkında gönderilen uyarıların günlüğü.';
$string['privacy:metadata:duration'] = 'Oturum süresi saniye cinsinden';
$string['privacy:metadata:groupid'] = 'Oturumla ilişkili grup kimliği.';
$string['privacy:metadata:ipaddress'] = 'Yoklamanın işaretlendiği IP adresi.';
$string['privacy:metadata:lasttaken'] = 'Oturum yoklamasının en son alındığı zaman damgası.';
$string['privacy:metadata:lasttakenby'] = 'Bu oturumda en son yoklama alan kullanıcının kimliği';
$string['privacy:metadata:notifyid'] = 'Yoklama oturumu ile ilişkilendirilen uyarı kimliği.';
$string['privacy:metadata:remarks'] = 'Kullanıcının yoklaması hakkındaki yorumlar.';
$string['privacy:metadata:sessdate'] = 'Oturumun başladığı zaman damgası.';
$string['privacy:metadata:sessionid'] = 'Yoklama oturumu kimliği.';
$string['privacy:metadata:statusid'] = 'Öğrencinin yoklama durumu kimliği.';
$string['privacy:metadata:statusset'] = 'Durum kimliğinin ait olduğu durum seti.';
$string['privacy:metadata:studentid'] = 'Yoklaması kaydedilen öğrencinin kimliği.';
$string['privacy:metadata:takenby'] = 'Öğrencinin yoklamasını alan kullanıcının kimliği.';
$string['privacy:metadata:timemodified'] = 'Oturum en son değiştirildiğinde zaman damgası';
$string['privacy:metadata:timesent'] = 'Uyarı gönderildiği zaman damgası.';
$string['privacy:metadata:timetaken'] = 'Öğrencinin yoklaması alındığında zaman damgası.';
$string['privacy:metadata:userid'] = 'Uyarının gönderileceği kullanıcının kimliği.';
$string['processingfile'] = 'Dosya işleniyor';
$string['qr_cookie_error'] = 'QR oturumu süresi doldu.';
$string['qr_pass_wrong'] = 'QR şifresi yanlış veya süresi dolmuş.';
$string['qrcode'] = 'QR kodu';
$string['qrcodeandpasswordheader'] = 'Yoklamanızı almak için aşağıdaki QR kodunu tarayın veya şifreyi kullanın';
$string['qrcodeheader'] = 'Yoklamanızı almak için aşağıdaki QR kodunu tarayın';
$string['qrcodevalidafter'] = 'saniye';
$string['qrcodevalidbefore'] = 'QR kodu geçerli:';
$string['randompassword'] = 'Rastgele şifre';
$string['remark'] = '{$a} için açıklama';
$string['remarks'] = 'Açıklamalar';
$string['repeatasfollows'] = 'Yukarıdaki oturumu şu şekilde tekrar edin';
$string['repeatevery'] = 'Her tekrarla';
$string['repeaton'] = 'Tekrar et';
$string['repeatuntil'] = 'Şu zamana kadar tekrar et';
$string['report'] = 'Rapor';
$string['reportsessiondate'] = 'Oturum tarihi';
$string['reportsessionduration'] = 'Oturum süresi';
$string['reportsessionlasttaken'] = 'Oturum son alınan zaman (öğretmen)';
$string['required'] = 'Gerekli*';
$string['requiredentries'] = 'Geçici kayıtlar, katılımcıların yoklama kayıtlarını üzerine yazar';
$string['requiredentry'] = 'Geçici kullanıcı birleştirme kılavuzu';
$string['requiredentry_help'] = '<p align="center"><b>Yoklama</b></p>
<p align="left"><strong>Hesapları Birleştir</strong></p>
<p align="left">
<table border="2" cellpadding="4">
    <tr>
        <th>Moodle Kullanıcısı</th>
        <th>Geçici Kullanıcı</th>
        <th>Eylem</th>
    </tr>
    <tr>
        <td>Yoklama verileri</td>
        <td>Yoklama verileri</td>
        <td>Geçici kullanıcı Moodle kullanıcısını geçersiz kılacak</td>
    </tr>
    <tr>
        <td>Yoklama verisi yok</td>
        <td>Yoklama verileri</td>
        <td>Geçici kullanıcı yoklama verileri Moodle kullanıcısına aktarılacak</td>
    </tr>
    <tr>
        <td>Yoklama verileri</td>
        <td>Yoklama verisi yok</td>
        <td>Geçici kullanıcı silinecek</td>
    </tr>
    <tr>
        <td>Yoklama verisi yok</td>
        <td>Yoklama verisi yok</td>
        <td>Geçici kullanıcı silinecek</td>
    </tr>
</table>

</p>
<p align="left"><strong>Birleştirme işleminden sonra geçici kullanıcı her durumda silinecektir</strong></p>';
$string['requiresubnet'] = 'Ağ adresi gerekli';
$string['requiresubnet_help'] = 'Yoklama kaydı, tam veya kısmi IP adreslerinin virgülle ayrılmış bir listesini belirterek belirli alt ağlarla sınırlandırılabilir.';
$string['resetcaledarcreate'] = 'Takvim etkinlikleri etkinleştirildi ancak var olan oturumların bir kısmı etkinlik içermiyor. Tüm mevcut oturumlar için takvim etkinlikleri oluşturmak istiyor musunuz?';
$string['resetcaledardelete'] = 'Takvim etkinlikleri devre dışı bırakıldı ancak bazı mevcut oturumlarda silinmesi gereken etkinlikler var. Tüm mevcut etkinlikleri silmek istiyor musunuz?';
$string['resetcalendar'] = 'Takvimi sıfırla';
$string['resetdescription'] = 'Yoklama verilerini silmenin veritabanından bilgi sileceğini unutmayın. Dersin başlangıç tarihini değiştirerek eski oturumları gizleyebilirsiniz!';
$string['resetstatuses'] = 'Durumları varsayılana sıfırla';
$string['restoredefaults'] = 'Varsayılanları geri yükle';
$string['resultsperpage'] = 'Sayfa başına sonuç';
$string['resultsperpage_desc'] = 'Bir sayfada görüntülenen öğrenci sayısı';
$string['rotateqrcode'] = 'QR kodunu döndür';
$string['rotateqrcode_cleartemppass_task'] = 'QR kodu döndürme işlevi tarafından oluşturulan geçici şifreleri temizleme görevi.';
$string['rotateqrcodeexpirymargin'] = 'QR kodu/şifre süresi dolma marjı (saniye)';
$string['rotateqrcodeexpirymargin_desc'] = 'QR kodu/şifresinin geçerliliğinin sona erdiği zaman aralığı (saniye)';
$string['rotateqrcodeinterval'] = 'QR kodu/şifre aralığı (saniye)';
$string['rotateqrcodeinterval_desc'] = 'QR kodu/şifresinin döndüğü zaman aralığı (saniye)';
$string['save'] = 'Yoklamayı kaydet';
$string['saveandshownext'] = 'Kaydet ve sonraki sayfayı göster';
$string['scantime'] = 'Tarama süresi';
$string['scantime_help'] = 'Bu, içe aktarma dosyasında bir zaman damgası dahil edilmesine izin verir - geçirilen zaman damgasını PHP strtotime işlevini kullanarak dönüştürmeye çalışacak ve ardından öğrenci için hangi durumu ayarlayacağını belirlemek için yoklama durumu ayarlarını kullanacaktır';
$string['search:activity'] = 'Yoklama - etkinlik bilgileri';
$string['selectactivity'] = 'Etkinliği seçin';
$string['session'] = 'Oturum';
$string['session_help'] = 'Oturum';
$string['sessionadded'] = 'Oturum başarıyla eklendi';
$string['sessionalreadyexists'] = 'Bu tarih için zaten bir oturum var';
$string['sessiondate'] = 'Tarih';
$string['sessiondays'] = 'Oturum Günleri';
$string['sessiondeleted'] = 'Oturum başarıyla silindi';
$string['sessiondescription'] = 'Oturum açıklaması';
$string['sessionduplicate'] = '{$a->course} kursunda {$a->activity}, {$a->date} oturumunda bir kopya oturum var';
$string['sessionexist'] = 'Oturum eklenmedi (zaten var)!';
$string['sessiongenerated'] = 'Bir oturum başarıyla oluşturuldu';
$string['sessions'] = 'Oturumlar';
$string['sessionsallcourses'] = 'Tüm kurslar';
$string['sessionsbyactivity'] = 'Yoklama örneği';
$string['sessionsbycourse'] = 'Ders';
$string['sessionsbydate'] = 'Hafta';
$string['sessionscompleted'] = 'Alınan oturumlar';
$string['sessionscurrentcourses'] = 'Mevcut kurslar';
$string['sessionsgenerated'] = '{$a} oturum başarıyla oluşturuldu';
$string['sessionsids'] = 'Oturum kimlikleri: ';
$string['sessionsnotfound'] = 'Seçilen zaman aralığında oturum yok';
$string['sessionstartdate'] = 'Oturum başlangıç tarihi';
$string['sessionstotal'] = 'Toplam oturum sayısı';
$string['sessionsupdated'] = 'Oturumlar güncellendi';
$string['sessiontype'] = 'Tür';
$string['sessiontype_help'] = 'Tüm öğrenciler veya bir grup öğrenci için oturum ekleyebilirsiniz. Farklı türde oturum ekleme yeteneği, etkinlik grup moduna bağlıdır.

* "Gruplar yok" grup modunda yalnızca tüm öğrenciler için oturum ekleyebilirsiniz.
* "Ayrı gruplar" grup modunda yalnızca bir grup öğrenci için oturum ekleyebilirsiniz.
* "Görünür gruplar" grup modunda her iki türde de oturum ekleyebilirsiniz.';
$string['sessiontypeshort'] = 'Tür';
$string['sessionunknowngroup'] = 'Bir oturum bilinmeyen grup/grupları belirtmiş: {$a}';
$string['sessionupdated'] = 'Oturum başarıyla güncellendi';
$string['set_by_student'] = 'Kendi kendine kaydedildi';
$string['setallstatuses'] = 'Şu durumu ayarla';
$string['setallstatusesto'] = 'Durumu «{$a}» olarak ayarla';
$string['setperiod'] = 'IP adresini serbest bırakmak için belirtilen süre dakika cinsinden';
$string['settings'] = 'Ayarlar';
$string['setunmarked'] = 'İşaretlenmediğinde otomatik olarak ayarla';
$string['setunmarked_help'] = 'Oturumda etkinleştirildiğinde, bir öğrenci kendi yoklamasını işaretlemediyse, bu durum ayarlanacaktır.';
$string['showdefaults'] = 'Varsayılanları göster';
$string['showduration'] = 'Süreyi göster';
$string['showextrauserdetails'] = 'Ekstra kullanıcı ayrıntılarını göster';
$string['showqrcode'] = 'QR kodunu göster';
$string['showsessiondescriptiononreport'] = 'Raporlarda oturum açıklamasını göster';
$string['showsessiondescriptiononreport_desc'] = 'Yoklama rapor listesindeki oturum açıklamasını göster.';
$string['showsessiondetails'] = 'Oturum ayrıntılarını göster';
$string['somedisabledstatus'] = '(Bazı seçenekler oturum başladığı için kaldırıldı.)';
$string['sortedgrid'] = 'Sıralı ızgara';
$string['sortedlist'] = 'Sıralı liste';
$string['startofperiod'] = 'Dönemin başlangıcı';
$string['starttime'] = 'Başlangıç saati';
$string['status'] = 'Durum';
$string['statusall'] = 'hepsi';
$string['statusdeleted'] = 'Durum silindi';
$string['statuses'] = 'Durumlar';
$string['statusset'] = 'Durum seti {$a}';
$string['statussetsettings'] = 'Durum seti';
$string['statustotalcount'] = 'Durum {$a} - Toplam sayım';
$string['statustotalcountcurrentweek'] = 'Durum {$a} - Mevcut hafta için toplam sayım';
$string['statustotalcountpreviousweek'] = 'Durum {$a} - Önceki hafta için toplam sayım';
$string['statusunselected'] = 'seçilmedi';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
// phpcs:disable moodle.Files.LangFilesOrdering.UnexpectedComment
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p'; // Aynı gün içinde birden fazla oturum oluşturulmasına izin vermek için satır eklendi.
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'Öğrenci Kimliği';
$string['studentmarked'] = 'Bu oturumda yoklamanız kaydedildi.';
$string['studentmarking'] = 'Öğrenci kaydı';
$string['studentpassword'] = 'Öğrenci şifresi';
$string['studentrecordingexpanded'] = 'Öğrenci kaydı genişletildi';
$string['studentrecordingexpanded_desc'] = 'Yeni oturum oluşturulurken "Öğrenci kaydı" ayarlarını varsayılan olarak genişletilmiş şekilde gösterir.';
$string['studentscanmark'] = 'Öğrencilerin kendi yoklamalarını kaydetmelerine izin ver';
$string['studentscanmark_desc'] = 'İşaretlenirse, öğretmenler öğrencilere kendi yoklamalarını işaretlemelerine izin verebilir.';
$string['studentscanmark_help'] = 'İşaretlenirse, öğrenciler oturum için kendi yoklama durumlarını değiştirebilirler.';
$string['studentscanmarksessiontime'] = 'Öğrenciler oturum zamanında yoklama kaydeder';
$string['studentscanmarksessiontime_desc'] = 'İşaretlenirse, öğrenciler yalnızca oturum sırasında kendi yoklamalarını kaydedebilirler.';
$string['studentscanmarksessiontimeend'] = 'Oturum sonu (dakika)';
$string['studentscanmarksessiontimeend_desc'] = 'Oturumun bitiş saati yoksa, oturumun öğrencilerin yoklama kaydetmesi için ne kadar süre kullanılabilir olmalıdır.';
$string['studentsearlyopentime'] = 'İşaretleme için oturumu erken aç';
$string['studentsearlyopentime_help'] = 'Bu, öğretmenlerin oturumu erken açmasına ve yoklamanın gerçek başlangıç saatinden önce alınmasına izin verir.';
$string['submit'] = 'Gönder';
$string['submitattendance'] = 'Yoklamayı gönder';
$string['submitattendancefuture'] = 'Gelecekteki yokluğu bildir';
$string['submitpassword'] = 'Şifreyi gönder';
$string['subnet'] = 'Alt ağ';
$string['subnetactivitylevel'] = 'Etkinlik düzeyinde alt ağ yapılandırmasına izin ver';
$string['subnetactivitylevel_desc'] = 'Etkinleştirilirse, öğretmenler bir yoklama oluştururken varsayılan alt ağın etkinlik düzeyinde geçersiz kılınmasını sağlayabilir. Aksi takdirde, yeni bir oturum oluştururken site varsayılanı kullanılacaktır.';
$string['subnetwrong'] = 'Yoklama yalnızca belirli konumlardan kaydedilebilir ve bu bilgisayar izin verilen listede değil.';
$string['summary'] = 'Özet';
$string['tablerenamefailed'] = 'Eski attforblock tablosunun yoklama olarak yeniden adlandırılması başarısız oldu';
$string['tactions'] = 'Eylem';
$string['takeattendance'] = 'Yoklama al';
$string['takensessions'] = 'Alınan oturumlar';
$string['tcreated'] = 'Oluşturuldu';
$string['tempaddform'] = 'Geçici kullanıcı ekle';
$string['tempexists'] = 'Bu e-posta adresine sahip bir geçici kullanıcı zaten var';
$string['temptable'] = 'Geçici kullanıcılar listesi';
$string['tempuser'] = 'Geçici kullanıcı';
$string['tempusermerge'] = 'Geçici kullanıcıyı birleştir';
$string['tempusers'] = 'Geçici kullanıcılar';
$string['tempusersedit'] = 'Geçici kullanıcıyı düzenle';
$string['tempuserslist'] = 'Geçici kullanıcılar';
$string['thirdpartyemails'] = 'Diğer kullanıcılara bildirim gönder';
$string['thirdpartyemails_help'] = 'Bildirim gönderilecek diğer kullanıcıların listesi. (mod/attendance:viewreports yetkisine ihtiyaç duyar)';
$string['thirdpartyemailsubject'] = 'Yoklama uyarısı';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname}\'in {$a->coursename} dersinde {$a->aname} içindeki yoklama oranı {$a->warningpercent}\'nin altında ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Bu e-postayı, bu dersin öğretmeninin e-posta adresinizi alıcılar listesine eklediği için alıyorsunuz';
$string['thiscourse'] = 'Bu ders';
$string['time'] = 'Zaman';
$string['timeahead'] = 'Bir yılı aşan birden fazla oturum oluşturulamaz, lütfen başlangıç ve bitiş tarihlerini ayarlayın.';
$string['timemodified'] = 'Değiştirilme zamanı';
$string['timetaken'] = 'Yoklama alındı';
$string['to'] = 'kime:';
$string['todate'] = 'bugüne kadar';
$string['totalnumsessions'] = 'Toplam oturum sayısı';
$string['triggered'] = 'İlk bildirildi';
$string['tuseremail'] = 'E-posta';
$string['tusername'] = 'Tam ad';
$string['ungraded'] = 'Derecelendirilmemiş oturumlar';
$string['unknowngroup'] = 'Bilinmeyen grup';
$string['unknownstatus'] = 'Bilinmeyen durum kimliği: {$a}';
$string['update'] = 'Güncelle';
$string['updateattendance'] = 'Yoklamayı güncelle';
$string['uploadattendance'] = 'CSV ile yoklama yükle';
$string['usedefaultsubnet'] = 'Varsayılanı kullan';
$string['usemessageform'] = 'veya aşağıdaki formu seçili öğrencilere mesaj göndermek için kullanın';
$string['userexistingstatus'] = 'Yoklamanız zaten şu şekilde işaretlendi: <strong>{$a}</strong>, gerekirse bunu değiştirmek için aşağıdaki formu kullanın.';
$string['userexists'] = 'Bu e-posta adresine sahip bir gerçek kullanıcı zaten var';
$string['userid'] = 'Kullanıcı kimliği';
$string['userimportfield'] = 'Dış kullanıcı alanı';
$string['userimportfield_help'] = 'İçe aktarılan CSV dosyasındaki kullanıcıyı tanımlayan alan';
$string['userimportto'] = 'Moodle kullanıcı alanı';
$string['userimportto_help'] = 'CSV dışa aktarımdan alınan verilerin eşleştiği Moodle alanı';
$string['users'] = 'Dışa aktarılacak kullanıcılar';
$string['usersessiongrade'] = 'Kullanıcı oturum notu';
$string['usersessionremarks'] = 'Kullanıcı oturum açıklamaları';
$string['usersessiontaken'] = 'Kullanıcı oturumu alındı';
$string['userstatus'] = 'Kullanıcı oturum durumu';
$string['usestatusset'] = 'Durum seti';
$string['variable'] = 'değişken';
$string['variablesupdated'] = 'Değişkenler başarıyla güncellendi';
$string['versionforprinting'] = 'yazdırma sürümü';
$string['viewmode'] = 'Görüntüleme modu';
$string['warnafter'] = 'Uyarıdan önce alınan oturum sayısı';
$string['warnafter_help'] = 'Kullanıcının yoklaması en az bu kadar oturum için alınmış olduğunda uyarılar tetiklenecektir.';
$string['warningdeleted'] = 'Uyarı silindi';
$string['warningdesc'] = 'Bu uyarılar otomatik olarak yeni yoklama aktivitelerine eklenecektir. Aynı anda birden fazla uyarı tetiklenirse, yalnızca daha düşük uyarı eşiğine sahip uyarı gönderilecektir.';
$string['warningdesc_course'] = 'Burada ayarlanan uyarı eşikleri devamsızlık raporunu etkiler ve öğrencilere ve üçüncü şahıslara bildirimde bulunulmasına olanak tanır. Aynı anda birden fazla uyarı tetiklenirse, yalnızca daha düşük uyarı eşiğine sahip uyarı gönderilecektir.';
$string['warningfailed'] = 'Aynı yüzde ve oturum sayısını kullanan bir uyarı oluşturamazsınız.';
$string['warningpercent'] = 'Yüzde şu değerin altına düşerse uyarı ver';
$string['warningpercent_help'] = 'Genel yüzdelik bu değerin altına düştüğünde bir uyarı tetiklenecektir.';
$string['warnings'] = 'Uyarı seti';
$string['warningthreshold'] = 'Uyarı eşiği';
$string['warningupdated'] = 'Uyarılar güncellendi';
$string['week'] = 'hafta';
$string['weekcommencing'] = 'Başlayan hafta';
$string['weeks'] = 'Haftalar';
$string['youcantdo'] = 'Herhangi bir şey yapamazsınız';
