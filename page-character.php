<?php get_header(); ?>
<!-- start to contentsArea -->
<div class="c-bkImg c-heading2--PagesBk"></div>
        <section class="c-contentsWrap">
            <h2 class="c-heading2 c-heading2Pages">
                <span class="c-heading2--EN u-fs-48">Character</span>
                <span class="c-heading2--JP">キャラクター</span>
            </h2>
            <div class="p-characterBox u-mt-64">
                <div class="p-characterBox__tab">
                    <ul class="p-characterBox__tab__menu">
                        <li class="p-characterBox__tab__menu__item is-active" data-tab="01">
                            <img src="<?php echo get_theme_file_uri('/img/character_yuna.png'); ?>" alt="">
                        </li>
                        <li class="p-characterBox__tab__menu__item" data-tab="02">
                            <img src="<?php echo get_theme_file_uri('/img/character_ren.png'); ?>" alt="">
                        </li>
                        <li class="p-characterBox__tab__menu__item" data-tab="03">
                            <img src="<?php echo get_theme_file_uri('/img/character_kira.png'); ?>" alt="">
                        </li>
                        <li class="p-characterBox__tab__menu__item" data-tab="04">
                            <img src="<?php echo get_theme_file_uri('/img/character_iori.png'); ?>" alt="">
                        </li>
                        <li class="p-characterBox__tab__menu__item" data-tab="05">
                            <img src="<?php echo get_theme_file_uri('/img/character_shadow.png'); ?>" alt="">
                        </li>
                    </ul>
                </div>
                <div class="p-characterBox__contents u-mt-40">
                    <div class="p-characterBox__contents__box p-box001 is-show" data-contents="01">
                        <img src="<?php echo get_theme_file_uri('/img/character_yuna.png'); ?>" alt="">
                        <div class="p-characterBox__contents__txtArea u-mt-32">
                            <p>ユウナ<span>Yuna</span></p>
                            <p>CV: 花澤 佳奈</p>
                            <p class="u-mt-24"><b>「自由な心に、限界なんてない！」</b><br>
                                ネオ・シティに暮らす少女。好奇心旺盛で、自由な意志を大切にする性格。
                                サイバー・ソウルとの出会いをきっかけに、世界の真実と「心の自由」を求めて戦いに身を投じていく。
                            </p>
                        </div>
                    </div>
                    <div class="p-characterBox__contents__box p-box002" data-contents="02">
                        <img src="<?php echo get_theme_file_uri('/img/character_ren.png'); ?>" alt="">
                        <div class="p-characterBox__contents__txtArea u-mt-32">
                            <p>レン<span>Ren</span></p>
                            <p>CV: 神谷 直也</p>
                            <p class="u-mt-24"><b>「コードが導く道を信じろ」</b>
                                <br>
                                ハッカー集団「オーバーライド」の中核メンバーで、ユウナの幼なじみ。
                                優れた知性と冷静な判断力を持つ一方で、妹を失った過去を抱えている。
                                表では無口な天才、裏では仲間思いの支え役。
                            </p>
                        </div>
                    </div>
                    <div class="p-characterBox__contents__box p-box003" data-contents="03">
                        <img src="<?php echo get_theme_file_uri('/img/character_kira.png'); ?>" alt="">
                        <div class="p-characterBox__contents__txtArea u-mt-32">
                            <p>キラ<span>Kira</span></p>
                            <p>CV: 早見 沙羅</p>
                            <p class="u-mt-24"><b>「守るべきものがある限り、私は退かない」</b><br>
                                元NCDA治安部隊のエリート。現在は無所属でユウナたちを陰から支える頼れる姉貴分。
                                圧倒的な戦闘スキルと防御能力を誇るが、過去の任務で組織に裏切られた経験を持つ。
                                無口だが仲間想いで、時折見せる笑顔に救われる者も多い。
                            </p>
                        </div>
                    </div>
                    <div class="p-characterBox__contents__box p-box004" data-contents="04">
                        <img src="<?php echo get_theme_file_uri('/img/character_iori.png'); ?>" alt="">
                        <div class="p-characterBox__contents__txtArea u-mt-32">
                            <p>イオリ<span>Iori</span></p>
                            <p>CV: 緒方 遼</p>
                            <p class="u-mt-24"><b>「知は力、そして希望だ」</b><br>
                                ネット深層で“守護者”として存在する非人間的存在。
                                古代デジタル文明の知識とリンクしており、人間にもAIにも属さない“中間者”として世界のバランスを見守っている。
                            </p>
                        </div>
                    </div>
                    <div class="p-characterBox__contents__box p-box005" data-contents="05">
                        <img src="<?php echo get_theme_file_uri('/img/character_shadow.png'); ?>" alt="">
                        <div class="p-characterBox__contents__txtArea u-mt-32">
                            <p>シャドウ<span>Shadow</span></p>
                            <p>CV: ???</p>
                            <p class="u-mt-24"><b>「心は制御できない。お前たちが証明するのだ」</b><br>
                                仮想と現実を漂う謎の存在。誰の命令にも従わず、独自の目的のために動く。
                                サイバー・ソウルを追いながら、ユウナに執着を見せる理由は不明。
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <script src="<?php echo get_theme_file_uri('/js/characterTab.js'); ?>"></script>
<!-- end to contentsArea -->
<?php get_footer(); ?>