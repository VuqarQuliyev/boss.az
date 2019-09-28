<?php require_once  "../header.php";
require_once "../../core/Auth.php";
$insert = new Auth();

$insert->insertUser();

?>

<div class="container">
    <div class="row">

        <div class="col-md-7">
            <h4 class="new-item-title">CV YERLƏŞDİRİN</h4>
            <div class="btn btn-cv">
                İş elanı yerləşdirin
            </div>
            <form method="POST" action="create.php">
                <fieldset class="full-field">
                    <div class="first-filed">
                        <label class="first-line-string">Ad *</label>
                        <input type="text" name="name" class="first-line">
                    </div>
                    <div class="first-filed">
                        <label class="center-line-string">Soyad *</label>
                        <input type="text" name="surname" class="center-line">
                    </div>
                    <div class="first-filed">
                        <label class="first-line-string">Atasının adı *</label>
                        <input type="text" name="father_name" class="first-line">
                    </div>

                    <div class="first-filed">
                        <label class="first-line-string" >Cins *</label>
                        <select style="height: 40px;width: 290px;padding-left: 15px;" name="gender">
                            <option value=""></option>
                            <option >Kishi</option>
                            <option >Qadin</option>
                        </select>
                    </div>
                    <div class="first-filed">
                        <label class="first-line-string">Yaş *</label>
                        <select style="height: 40px;width: 290px;padding-left: 15px;" name="age">
                            <option value=""></option>
                            <option >18</option>
                            <option >19</option>
                            <option >20</option>
                            <option >21</option>
                            <option >22</option>
                            <option >23</option>
                            <option >24</option>
                            <option >25</option>
                            <option >26</option>
                            <option >27</option>
                            <option >28</option>
                            <option >29</option>
                            <option >30</option>
                            <option >31</option>
                            <option >32</option>
                            <option >33</option>
                            <option >34</option>
                            <option >35</option>
                            <option >36</option>
                            <option >37</option>
                            <option >38</option>
                            <option >39</option>
                            <option >40</option>
                        </select>
                    </div>

                    <input type="file" class="search-img" style="margin-top: 15px;" name="image">


                    <div class="education-field">
                        <label class="first-line-string">Təhsil *</label>
                        <select style="width: 100%;height: 40px;padding-left: 15px;" name="education">
                            <option value=""></option>
                            <option >Elmi Dərəcə</option>
                            <option >Ali</option>
                            <option >Natamam Ali</option>
                            <option>Orta Texniki</option>
                            <option >Orta Xüsusi</option>
                            <option >Orta</option>
                        </select>
                    </div>

                    <div class="education-text-field">
                        <label class="first-line-string">Ətraflı *</label>
                        <textarea style="width: 100%;height: 150px;padding-left: 15px;padding-right: 15px" name="more_education">
                    </textarea>
                    </div>

                    <div class="category-field">
                        <label class="first-line-string">Kateqoriya *</label>
                        <select style="width: 100%;height: 40px;padding-left: 15px;" name="category">
                            <option value=""></option>
                            <optgroup label="Marketinq">
                                <option>Marketinq menecment</option>
                                <option>Ictimayetle elaqeler</option>
                                <option>Reklam</option>
                                <option>Kopiraytinq</option>
                            </optgroup>
                            <optgroup label="Informasiya Texnalogiyalari">
                                <option>Sistem idare etmesi</option>
                                <option>Melumat bazasinin idare edilmesi ve inksafi</option>
                                <option>Proqramlaşdırma</option>
                                <option>İT layihələrin idarə edilməsi</option>
                            </optgroup>
                            <optgroup label="İnzibati">
                                <option>İnzibati dəstək</option>
                                <option>Menecment</option>
                                <option>Ofis menecmenti</option>
                                <option>Katibə / Resepşn</option>
                                <option>Heyətin idarəolunması</option>
                                <option>Digər</option>
                            </optgroup>
                            <optgroup label="Satış">
                                <option>Daşınmaz əmlak agenti / makler</option>
                                <option>Satış üzrə mütəxəssis</option>
                            </optgroup>
                            <optgroup label="Dizayn">
                                <option>Veb-dizayn</option>
                                <option>Memar / İnteryer dizaynı</option>
                                <option>Geyim dizaynı</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="task-field">
                        <label class="first-line-string">Vəzifə *</label>
                        <textarea style="width: 100%;" name="task">

                        </textarea>
                    </div>
                    <div class="city-field">
                        <label class="first-line-string">Şəhər *</label>
                        <select style="width: 100%;height: 40px;" name="city">
                            <option value=""></option>
                            <option>Quba</option>
                            <option>Qusar</option>
                            <option>Sabirabad</option>
                            <option>Ağdaş</option>
                            <option>Cəlilabad</option>
                            <option>Xızı</option>
                            <option>İsmayıllı</option>
                            <option>Sumqayıt</option>
                            <option>Xırdalan</option>
                        </select>
                    </div>
                    <div class="salary-field">
                        <label class="first-line-string">Minimum əmək haqqı*</label>
                        <select style="width: 100%;height: 40px;" name="salary">
                            <option value=""></option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                            <option>600</option>
                            <option>700</option>
                            <option>800</option>
                            <option>900</option>
                            <option>1000</option>
                            <option>1100</option>
                            <option>1200</option>
                            <option>1400</option>
                            <option>1500</option>
                            <option>1700</option>
                        </select>
                    </div>

                    <div class="email-field">
                        <label class="first-line-string">Email *</label>
                        <input type="email" style="width: 100%;" name="email">
                    </div>

                    <div class="tel-field" style="margin-top: 30px;">
                        <label class="first-line-string">Telefon *</label>
                        <input type="text" style="width: 100%;padding-left: 15px;" placeholder="Ev:" name="tel">
                    </div>

                </fieldset>
                <button class="btn-create-cv" type="submit" name="submit">
                    Yerləşdirin
                </button>
            </form>

        </div>


        <div class="col-md-5">
            <h4>QAYDALAR</h4>

            <div class="rules">
                <ol>
                    <li>CV/rezümelərin yerləşdirilməsi pulsuzdur. Hər bir adam 30 gün müddətində yalnız bir rezüme yerləşdirə bilər.</li>
                    <li>CV/rezümenin ən qısa müddətdə dərc olunması üçün formanın doldurulmasına dair bütün təlimatlara ciddi riayət olunmalıdır.
                        Səliqəsiz doldurulmuş formalar redaktəyə məruz qalacaq və dərhal dərc olunmayacaq.</li>
                    <li>Elanların baş (BÖYÜK) hərflərlə tərtib olunması, o cümlədən latın hərfləri ilə yazılması qadağandır. Elanın mətni
                        bütünlüklə bir dildə olmalıdır.</li>
                    <li><p>Aşağıdakı tərkibli rezümelərin yerləşdirilməsi qadağandır:</p>
                    <ul>
                        <li>bilərəkdən həqiqətə uyğun olmayan şəxsi məlumat;</li>
                        <li>ədəbsiz, təhqiredici sözlər və ifadələr;</li>
                        <li>reklam xarakterli;</li>
                        <li>xidmət təklifləri.</li>
                    </ul>
                    </li>
                    <li>
                        <p>CV/rezümedə şəkil varsa, aşağıdakı şərtlərə cavab verməlidir:</p>
                        <ul>
                            <li>şəkildə yalnız bir adam olmalıdır;</li>
                            <li>namizədin üzü aydın görünməlidir;</li>
                            <li>filtrlərsiz olmalıdır.</li>
                        </ul>
                    </li>
                    <li>CV/rezüme yerləşdirilərkən, «Vəzifə» sütununda kateqoriyaya uyğun olan yalnız bir mövqe qeyd olunmalıdır.</li>
                    <li>«Təhsil» sütununda namizədin bitirdiyi təhsil müəssisəsinin, yiyələndiyi ixtisasın adı və təhsil aldığı vaxt qeyd olunmalıdır.</li>
                    <li>«İş təcrübəsi» sütununda namizədin iş yeri, vəzifəsi və çalışdığı müddət qeyd olunmalıdır.</li>
                    <li>«Bacarıqlar» sütununda namizədin peşəkar bacarıqlarının, bildiyi dillərin, kompyuter proqramlarının və s. qeyd olunması tövsiyə olunur.</li>
                    <li>«Özünüz haqqında» adlı sütunda namizədin şəxsi xüsusiyyətləri, hobbisi, maraqları və s. qeyd olunur.</li>

                </ol>
            </div>
        </div>

    </div>

</div>



<?php require_once  "../footer.php";?>
