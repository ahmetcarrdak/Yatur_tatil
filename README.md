# Yatur - Turizm Websitesi

## Proje Hakkında
Yatur, kullanıcıların tatil ve tur seçeneklerini keşfetmesine ve rezervasyon yapmasına olanak tanıyan bir turizm sitesidir. PHP ve MySQL kullanılarak geliştirilen bu platform, ayrıntılı tur listeleri, rezervasyon seçenekleri ve içerik yönetimi için bir yönetici paneli sunmaktadır.

## Teknoloji Yığını
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Veritabanı**: MySQL

## Özellikler
- **Ana Sayfa**: Kullanıcılar, mevcut turları ve tatil paketlerini listeleyebilir, filtreler kullanarak arama yapabilir.
- **Tur Detayları**: Kullanıcılar, tur hakkında detaylı bilgi alabilir (fiyat, tarih, güzergah vb.).
- **Rezervasyon Sistemi**: Kullanıcılar turları seçerek rezervasyon yapabilir.
- **Yönetici Paneli**: Yöneticiler, turları, kullanıcıları ve rezervasyonları yönetebilir.
- **İletişim Formu**: Kullanıcılar site yöneticileriyle iletişime geçebilir.

## Kurulum

### Gereksinimler
- PHP 7.4 veya üstü
- MySQL 5.7 veya üstü
- Apache veya Nginx sunucusu

### Adımlar
1. Depoyu klonlayın:
   ```bash
   git clone https://github.com/ahmetcarrdak/Yatur_tatil.git
   ```
2. Proje dizinine gidin:
   ```bash
   cd Yatur_tatil
   ```
3. Veritabanını yüklemek için `yatur.sql` dosyasını MySQL'e aktarın.
4. `config.php` dosyasındaki veritabanı bağlantı bilgilerini düzenleyin.
5. Web sitesini yerel sunucunuzda (Apache/Nginx) çalıştırın.

## Veritabanı Şeması
Veritabanı aşağıdaki temel tabloları içerir:
- **Kullanıcılar**: Kullanıcı bilgilerini tutar.
- **Turlar**: Tur detaylarını (isim, açıklama, fiyat vb.) içerir.
- **Rezervasyonlar**: Kullanıcıların rezervasyonlarını takip eder.

## Kullanım
- **Kullanıcılar**: Turları keşfedebilir ve rezervasyon yapabilir.
- **Yöneticiler**: Yönetici paneli aracılığıyla turları ve rezervasyonları yönetebilir.

## Katkıda Bulunma
Katkıda bulunmak için:
1. Depoyu çatallayın (fork).
2. Yeni bir özellik veya hata düzeltmesi için bir dal (branch) oluşturun.
3. Değişikliklerinizi içeren bir pull request gönderin.

## Lisans
Bu proje açık kaynaklıdır ve MIT Lisansı altında yayınlanmıştır.
