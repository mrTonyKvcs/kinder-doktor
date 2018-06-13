@extends('layouts.app')

@section('content')
<div id="main" class="content-main">
            <div class="content-article">

                <!-- Write code -->

                <div class="section-subbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="caption">{{ trans('navbar.homeopathy') }}</div>
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a> </li>
                                    <li class="active">{{ trans('navbar.homeopathy') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- E: .section-banner -->
				
				<div class="primary-content">
					<div class="service-single">
						<div class="container">
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="service-detail">
										{{--<p><img src="/images/picture/service-detail-01.jpg" alt="image" class="img-responsive"></p>--}}
                                        <section class="block-text">
                                            <h5 class="tt05">MILYEN BETEGSÉGEK GYÓGYÍTÁSÁRA ALKALMAZHATÓ?</h5>
											<p>A homeopátia a legtöbb akut és krónikus betegségben alkalmazható, akár van látható szervi elváltozás, akár nincs. Újszülött kortól az agg korig, terhesség alatt, sőt állatoknál is kiváló eredmények érhetők el. Harmonikus, tartós gyógyulást, illetve egészségi állapot javulást hoz létre.</p>
											<p>Alkalmazható visszatérő légúti betegségek, croup, asztma, allergia, hormonális panaszok, fejfájás, különböző eredetű bőrbetegségek, menstruációs problémák, meddőség, emésztési panaszok, alvászavarok, viselkedés problémák esetén.
A homeopátiás szerek a hagyományos gyógyszerek és kezelési módok helyett vagy azok kiegészítésére szolgál.
</p>
											{{--<ol class="notype">--}}
												{{--<li><i class="fa fa-check"></i> Qualified Staff of Doctors</li>--}}
												{{--<li><i class="fa fa-check"></i> Qualified Staff of Doctors</li>--}}
												{{--<li><i class="fa fa-check"></i> Feel like you are at Home Services </li>--}}
												{{--<li><i class="fa fa-check"></i> Feel like you are at Home Services </li>--}}
												{{--<li><i class="fa fa-check"></i> 24x7 Emergency Services </li>--}}
												{{--<li><i class="fa fa-check"></i> 24x7 Emergency Services </li>--}}
												{{--<li><i class="fa fa-check"></i> Save your Money and Time with us</li>--}}
												{{--<li><i class="fa fa-check"></i> Save your Money and Time with us</li>--}}
												{{--<li><i class="fa fa-check"></i> Easy and Affordable Billing </li>--}}
												{{--<li><i class="fa fa-check"></i> Easy and Affordable Billing </li>--}}
											{{--</ol>--}}
											<p>Célom, hogy minél többen megismerjék és alkalmazzák ezt a csodálatos gyógymódot.</p>
                                            <p>A homeopátia nem betegségre, hanem egyéni tünetekre rendel szereket. Alapja a megfigyelés. A tünetek a szervezet nem megfelelő működését jelzik. A homeopátia szerei növényi és ásványi és állati eredetűek lehetnek. Hatására a szervezet működése egyensúlyba kerül.</p>
                                            <p><img src="/images/homeopathy_banner2.jpg" alt="image" class="img-responsive"></p>
                                         <p></p>   
										</section>
										<section class="block-text">
											<div class="media">
												<div class="media-left pull-right">
													{{--<a href="#">--}}
														{{--<img src="/images/homeopathy_banner.jpg" class="media-object" alt="Sample Image">--}}
													{{--</a>--}}
												</div>
												<div class="media-body">
													<h5 class="tt05">Hogyan kell szedni a homeopátia gyógyszereit?</h5>
													<p><strong>A homeopátiás szerek szedésének van néhány alapszabálya, amit nagyon fontos betartani a hatékony kezelés érdekében.</strong></p>
													<p>Inkább szopogassuk, ne rágjuk!</p>
													<p>A golyócskákat, tablettákat el kell szopogatni, vagy a nyelv alatt hagyjuk elolvadni. Mivel a száj nyálkahártyájáról szívódik fel a hatóanyag, ezért fontos, hogy minél tovább tartózkodjon a szájban a szer.</p>
													<p>Ne fogjuk meg a kezünkkel!</p>
													<p>Csavarjuk a tubus tetejébe, és szórjuk a szájunkba. Üveges kiszerelésnél tegyük műanyag kanálba. A kézzel érintkezve, a vizes felületen a szer leadja hatóanyagát. </p>
													<p>Kerüljük az  erős kávét, teát fogyasztását és a dohányzást, mivel ezek az anyagok a száj nyálkahártya ereit szűkítik, emiatt csökkentik a homeopátiás szerek hatását.</p>
													<p>Kerüljük a mentol, kámfor és egyéb aromás anyagok, illóolajok használatát (külsőleg is), mert ezek ellensúlyozhatják a gyógyszerek hatását. Homeopátiás kezelés alatt ajánlott  a speciális gyógynövényekből összeállított fogkrémek használata.</p>
													<p>Két étkezés közt ideális!</p>
													<p>Jobb, ha étkezések között vesszük be a gyógyszert, vagy legalább evés, ivás előtt negyed órával. Ajánlatos, hogy semmilyen erős íz (pl: mentol, kávé, erőspaprika...) ne legyen érezhető a szájban a gyógyszer bevételekor.</p>
													<p>Vízzel is feloldhatjuk!</p>
													<p>Csecsemőknek, kisgyerekeknek kevés vízben feloldva is beadhatók. Nem kell megvárni, amíg az összes golyó feloldódik, azonnal használható.</p>
													<p>A szerek tárolásában is be kell tartanunk alapvető szabályokat. Mivel rezgéseket közvetítenek, így rezgésekkel működő készülékektől távol kell tartanunk a gyógyszeres tubusokat, üvegeket ( TV, rádió,mobiltelefon,mikrohullámú sütő, számítógép).</p>
													<p>Az eredeti csomagolásban kell tartanunk a golyócskákat, sötét és száraz helyen. Nem érdemes őket másik szer tubusába, üvegébe áttenni.</p>
													<p></p>
												</div>
											</div>
										</section>
										<section class="block-text">
                                            <p><img src="/images/homeopathy_banner.jpg" alt="image" class="img-responsive"></p>
											<h5 class="tt05">A homeopátiás gyógyszerek laktózt tartalmaznak. Laktózérzékenyek, tejfehérje allergiások szedhetik a szereket?</h5>
											<p>Igen, oldják fel vízben. Nem kell megvárni amíg elolvad, azonnal használható. 1-2 dl vízbe 5 golyót kell feloldani, majd ebből 1-2 kortyot adagolni.Kisgyerekeknek, babáknak is így adhatók a szerek. A laktóz intolerancia tünetei általában 3g feletti tejcukor mennyiség felett jelentkeznek. Ehhez a mennyiséghez pl. 5 teljes tubus homeopátiás gyógyszert kellene elfogyasztani! Tehát a laktóz intoleranciában szenvedők is alkalmazhatják a golyócskákat, mert ez a mennyiség általában nem okoz panaszt!</p>
											<p>1 adag, azaz 5 golyócska laktóztartalma = 0.04 g</p>
											<p></p>
										</section>
										<section class="block-text">
											<h5 class="tt05">Cukorbetegek szedhetik a golyócskákat?</h5>
											<p>A golyócskák cukortartalma összehasonlítva 1 db kockacukorral:</p>
											<p>1 kockacukor = 5 g szacharóz</p>
											<p>1 tubus, 80 golyócskát tartalmazó monokomponensű gyógyszerben lévő szacharóz mennyisége = 3,4 g</p>
											<p>1 adag, azaz 5 golyócska szacharóztartalma = 0,21 g</p>
											<p>Cukorbetegek vegyék figyelembe az egy adag, azaz 5 golyócska 0.21 g szacharóz és 0.04 g laktóztartalmát napi diétájuk összeállításánál!</p>
										</section>
									</div>
								</div>
								<!-- E: . -->
							</div>
						</div>
					</div>
					<!-- E: . -->
				</div>
            </div>
        </div>
@endsection
