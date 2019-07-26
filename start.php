<?php
    include 'controllers/fights.php';
    include 'controllers/getLastBoss.php';
    include 'controllers/getLastUser.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jeu</title>
</head>
<body class="bgStory">
<?php include('./templates/header.html'); ?>
<main>
    <section class="flex">
        <div id="story">
            <div id="intro" class="flex">
                <!-- Intro -->
                <p class="fadeIn txtOne">Élevé par votre mère depuis votre naissance, elle vous raconte depuis toujours que votre père est parti combattre le mal qui règne encore à ce jour sur la région.</p>
                <p class="fadeIn txtTwo">Jamais revenu, votre père est probablement mort.</p>
                <p class="fadeIn txtThree">De ce fait, vous vous êtes entrainé au maniement de l'épée.</p>
                <p class="fadeIn txtFour">Vous venez récemment d'avoir 20 ans et aujourd'hui il est grand temps de partir venger votre père.</p>

                <button  class="fadeInBtn btnFive" id="btnStart">Commencer l'aventure</button>
            </div>

            <div id="tavern" class="noDisplay flex">
            <h4 class="fadeIn txtOne">Votre aventure commence à la taverne du Géant endormi.</h4>
                <p class="fadeIn txtTwo">À votre table, vous essayez d'élaborer un plan d'action, une première direction à prendre, mais à force de vous agacer et de grommeler, votre épée vous échappe des mains et tombe au sol. Vous la ramassez et en vous relevant, un vieil homme se tient à votre table.</p>
                <p class="fadeIn txtThree">Il a remarqué que vous étiez un aventurier et vous demande pourquoi vous faites tant de raffut. Vous lui racontez donc votre histoire. L'homme, touché par ce récit se permet de vous aider, mais son âge avancé ne lui permet pas de se souvenir du chemin exact jusqu'au mal qui gouverne ce royaume. Il vous évoque la possibilité d'explorer les zones alentours afin de débuter votre périple en quête de revanche.</p>
                <div class="button flexRow fadeInBtn btnFour">
                    <button id="btnForest">Forêt</button>
                    <button id="btnPlain">Plaine</button>
                </div>
            </div>

            <div id="forest" class="noDisplay flex">
                <!-- Foret -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez dans la forêt de Shlipak.</h4>
                    <p class="fadeIn txtTwo">Une fois passé les portes du village, vous vous enfoncez dans la forêt de Shlipak, mais des bandits ont entendu votre conversation avec le vieil homme de la taverne et se sont tapis dans la forêt afin de vous tendre une embuscade.</p>
                    <div class="btnFight flex fadeInBtn btnThree">
                        <button id="fightForest">Combattre !</button>
                        <?php getFight("bandit", "Un bandit vous attaque!"); ?>
                    </div>
                </div>
                <div class="noDisplay fadeIn txtOne" id="continuedbandit">
                <p>Les bandits sont vaincus, leur corps allongé sur le sol. Vous inspectez scrupuleusement la forêt et remarquez une pancarte qui vous indique le port de Carmin-sur-Mer. Avant de partir, vous trouvez un rouleau semblant dépasser d'un des sacs des bandits qui ressemble à une carte.</p>
                    <div class="button flexRow fadeInBtn btnTwo">
                        <button id="btnCaveFromForest">Suivre la carte</button>
                        <button id="btnHarborFromForest">Port de Carmin-sur-Mer</button>
                    </div>
                </div>
            </div>

            <div id="plains" class="noDisplay flex">
                <!-- Plaine -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez dans les plaines de Cania.</h4>
                    <p class="fadeIn txtTwo">Peut après être sorti du village, vous vous faites attaquer par des loups.</p>
                    <div class="btnFight flex fadeInBtn btnThree">
                        <button id="fightPlains">Combattre !</button>
                        <?php getFight("wolf", "Un Loup des plaines vous attaque!"); ?>
                    </div>
                    <div class="noDisplay"  id="continuedwolf">
                        <p class="fadeIn txtOne">Après ce combat durement gagné contre un loup exceptionnellement BALEZE, vous prenez le temps d'inspecter les environs. Vous remarquez une pancarte qui vous indique la direction du port de Carmin-sur-Mer. Mais vous distinguez non loin de vous un interstice entre deux rochers.</p>
                        <div class="button flexRow fadeInBtn btnTwo">
                            <button id="btnCaveFromPlains">Passage entre deux rochers</button>
                            <button id="btnHarborFromPlains">Port de Carmin-sur-mer</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cave" class="noDisplay flex">
                <!-- Passage Secret -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez au Tram des profondeurs.</h4>
                    <p class="fadeIn txtTwo">Vous avez réussi à trouver l'entrée d'un ancien réseau de Tram construit par des gnomes il y a fort longtemp. Aujourd'hui, seule des gobelins maladroits vivent dans ces souterrains. D'ailleurs, ils vous attaquent!!</p>
                    <div class="btnFight flex fadeInBtn btnThree">
                        <button id="fightCave">Combattre !</button>
                        <?php getFight("goblin", "Une horde de gobelin vous attaque!"); ?>
                    </div>
                    <div class="noDisplay" id="continuedgoblin">
                        <p class="fadeIn txtOne">Vous avez terrassé cette incroyable petite horde de gobelins, mais vous sentez que quelque chose d'incroyablement plus puissant tapie dans l'ombre, vous épie. Vous continuez votre chemin jusqu'à un endroit où il se divise en deux, mais à ce même emplacement vous apercevez la menace: le Roi des Gobelins bloque le passage et il a une otage. Il vous défie ! S'il gagne vous devenez son esclave. Si vous gagnez, vous libérez l'otage et aurait la possibilité de passer.</p>
                        <div class="btnFight flex fadeInBtn btnTwo">
                            <button id="fightCaveBoss">Combattre !</button>
                            <?php getFight("goblinBoss", "Le roi des goblins vous attaque!"); ?>
                        </div>
                    </div>

                    <div class="noDisplay"  id="continuedgoblinBoss">
                        <p class="fadeIn txtOne">Vous avez défait le Roi des Gobelins. L'otage est libre ! Elle vous est grandement reconnaissante et succombe à votre charme et votre héroïsme. Là voilà littéralement pendue à votre cou et vous couvre de bisous avant de s'offrir à vous !</p>
                        <p class="fadeIn txtTwo">Ceci fait, vous reprenez votre aventure. Deux chemin se séparent, leur destination est gravée sur les parois.</p>
                        <div class="button flexRow fadeInBtn btnThree">
                            <button id="btnJungleFromCave">La jungle</button>
                            <button id="btnSwampFromCave">Le marais</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="harbor" class="noDisplay flex">
                <!-- Port -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez au port de Carmin-sur-Mer.</h4>
                    <p class="fadeIn txtTwo">En arrivant sur la place centrale du port, vous remarquez une serveuse qui vous aguiche au loin, mais des marins fort bourrés s'en prennent à vous.</p>
                    <div class="btnFight flex fadeInTwo btnThree">
                        <button id="fightHarbor">Combattre !</button>
                        <?php getFight("sailor", "Un marin ivre vous attaque!"); ?>
                    </div>
                    <div class="noDisplay" id="continuedsailor">
                        <p class="fadeIn txtOne">Vous avez calmé les marins et leur avez permis de dessaouler quelque peu. L'un d'eux vient même s'excuser et vous offre une potion et repart dépiter. Cependant, vous avez toujours besoin d'informations sur le chemin à prendre pour aller terrasser le mal. La serveuse continue de vous aguicher au loin, vous décidez donc d'aller l'interroger.</p>
                        <p class="fadeIn txtTwo">Vous arrivez devant elle et vous lui présentez toutes vos salutations les plus distinguées. Vous lui demandez par la suite la marche à suivre pour se rendre au domaine du mal qui règne sur la région. Elle vous dit qu'elle ne vous répondra qu'en échange d'un service de votre part.<span class="inform">Vous acceptez</span></p>
                        <p class="fadeIn txtThree">Son mari est parti naviguer depuis de longs mois et elle vous demande alors de satisfaire ses envies et de vous offrir à elle.<span class="inform">Vous vous attelez à la tâche.</span></p>
                        <p class="fadeIn txtFour">Une fois ses désirs assouvis, elle vous indique que le bateau s'en va sous peu vers le marais ou la jungle et qu'elle peut influencer la destination auprès des marins, pour vous. Vous acceptez et courrez-vous cacher dans l'un des coffres du bateau.<span class="inform">Vous êtes en pleine mer sur le bateau.</span></p>
                        <p class="fadeIn txtFive">Les marins vous ont trouvé, certains vous reconnaissent et expliquent à leur capitaine que vous les avez tabassé dans le port. Il s'énerve et vous agresse.</p>
                        <div class="btnFight flex fadeInBtn btnSix">
                            <button id="fightHarborBoss">Combattre !</button>
                            <?php getFight("sailorBoss", "Le capitaine du bateau vous attaque!"); ?>
                        </div>
                    </div>
                    <div class="noDisplay"  id="continuedsailorBoss">
                        <p class="fadeIn txtOne">Vous avez résigné les marins à vous conduire à bon port.</p>
                        <div class="button flexRow fadeInBtn btnTwo">
                            <button id="btnJungleFromHarbor">S'arrimer à la jungle</button>
                            <button id="btnSwampFromHarbor">S'arrimer au marais</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="jungle" class="noDisplay flex">
                <!-- Jungle -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez dans la jungle de Mirkwood.</h4>
                    <p class="fadeIn txtTwo">Vous entrez dans la jungle et remarquez au loin votre objectif. Le château du mal qui règne sur la région dépasse de la jungle de par sa grandeur, ce qui vous indique la direction à prendre. À ce moment précis des araignées vous attaquent !</p>
                    <div class="btnFight flex fadeInBtn btnThree">
                        <button id="fightJungle">Combattre !</button>
                        <?php getFight("spider", "Une araignée géante vous attaque!"); ?>
                    </div>
                    <div class="noDisplay" id="continuedspider">
                        <p class="fadeIn txtOne">Pendant le combat, vous vous enfoncez dans la jungle par inadvertance, vous vous rendez compte que vous êtes devant la tanière d'une immense Guivre. Peu à peu elle sort de sa tanière et vous fixe du regard. C'est ainsi que débute un intense battle de regard.</p>
                        <p class="fadeIn txtTwo">Mais vous perdez patience, vous n'avez pas de temps à perdre et vous chargez la Guivre.</p>
                        <div class="btnFight flex fadeInBtn btnThree">
                            <button id="fightJungleBoss">Combattre !</button>
                            <?php getFight("guivreBoss", "La guivre vous attaque!"); ?>
                        </div>
                    </div>

                    <div class="noDisplay" id="continuedguivreBoss">
                        <p class="fadeIn txtOne">Bien joué ! Vous avez peut-être perdu le battle de regard, mais elle a perdu la vie.</p>
                        <p class="fadeIn txtTwo">Ceci fait, vous remarquez que les portes du château se trouvent devant non loin de vous.</p>
                        <div class="button flexRow fadeInBtn btnThree">
                            <button id="btnCastleFromJungle">Continuer vers le château</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="swamp" class="noDisplay flex">
                <!-- Marais -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez dans le marais de Tabanta.</h4>
                    <p class="fadeIn txtTwo">Vous êtes arrivé dans les marais où pullulent divers serpents et moustiques.</p>
                    <p class="fadeIn txtThree">La mort et la maladie vous guettent à chaque recoin. Vous sentez que votre objectif est proche.</p>
                    <p class="fadeIn txtFour">Vous apercevez au loin le château du mal qui règne sur le royaume. Mais pendant que vous êtes dans vos pensées, des tréants en ont profité pour vous encercler et vous attaque.</p>
                    <div class="btnFight flex fadeInBtn btnFive">
                        <button id="fightSwamp">Combattre !</button>
                        <?php getFight("treant", "Un tréant vous attaque!"); ?>
                    </div>

                    <div class="noDisplay" id="continuedtreant">
                        <p class="fadeIn txtOne">Vous récupérez votre souffle et reprenez votre incursion dans ce marais en direction du château.</p>
                        <p class="fadeIn txtTwo">À l'aide de votre épée, vous tailladez lianes et liaires, découpez herbes et serpents afin de vous frayer un chemin dans ses eaux épaisses et visqueuses.</p>
                        <p class="fadeIn txtThree">Cependant vous apercevez un arbre qui vous paraît plus robuste que les autres. Au fur et à mesure que vous vous rapprochez de lui, le temps semble se dégrader, la luminosité s'assombrit.</p>
                        <p class="fadeIn txtFour">Maintenant que vous êtes au pied de l'arbre, une aura sombre se dégage de lui, il se tient devant vous et se lève, c'est un Tréant Maléfique, il vous attaque !</p>
                        <div class="btnFight flex fadeInBtn btnFive">
                            <button id="fightSwampBoss">Combattre !</button>
                            <?php getFight("treantBoss", "Le tréant maléfique vous attaque!"); ?>
                        </div>
                    </div>

                    <div class="noDisplay" id="continuedtreantBoss">
                    <p class="fadeIn txtOne">Vous avez triomphé du Tréant Maléfique et vous vous rendez compte que vous êtes non loin des portes du château.</p>
                        <div class="button flexRow fadeInBtn btnTwo">
                            <button id="btnCastleFromSwamp">Continuer vers le château</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="castle" class="noDisplay flex">
                <!-- château -->
                <div>
                    <h4 class="fadeIn txtOne">Vous arrivez au château Vania.</h4>
                    <p class="fadeIn txtTwo">Vous vous tenez dans l'enceinte du château, un homme en armure se tient devant vous, il ne vous faut que peu de temps pour comprendre que ça y est, vous êtes devant lui.</p>
                    <p class="fadeIn txtThree">Vous vous apprêtez à charger, vous avez la main posé sur le manche de votre épée se trouvant à votre ceinture, mais au moment d'engager le combat, il vous demande pourquoi vous êtes là. Vous lui expliquez qu'il y a 20 ans, votre père est parti le combattre et qu'il n'est jamais revenu. Pendant 20 longues années, vous vous êtes entraîné sans relâche, vous avez même appris le Klingon. Et maintenant vous vous sentez prêt à le venger.</p>
                    <p class="fadeIn txtFour">A peine fini votre monologue interminable, que vous avez engagé le combat.</p>
                    <p class="fadeIn txtFive"> yIHIv !</p>
                    <div class="btnFight flex fadeInBtn btnSix">
                        <button id="fightCastle">Combattre !</button>
                        <?php getFight("endBoss", "Vous attaquez le roi-sorcier"); ?>
                    </div>

                    <div class="noDisplay" id="continuedendBoss">
                        <p class="fadeIn txtOne">Ce fut un combat violent. Vous avez donné des coups terribles, mais n'en avez pas reçu de moins pire.</p>
                        <p class="fadeIn txtTwo">Cependant, il n'est pas tout à fait mort, même si cela ne saurait tarder. Dans un dernier long soupir, il vous adresse ce dernier message : "Il y a 20 ans, un homme est bien venu en ces lieux. Mais il a terrassé le mal qui y régnait.</p>
                        <p class="fadeIn txtThree">Cependant, ce mal cache un terrible secret. Il commande des armées de morts-vivants.</p>
                        <p class="fadeIn txtFour">Mais une fois sans chef, cette armée se retrouverait à envahir la région et à s'attaquer aux innocents. C'est pour cela qu'il y à 20 ans, après avoir vaincu le mal, j'ai dû prendre sa place afin de les réguler. C'est pour cela, qu'aujourd'hui, il t'incombe à toi aussi de prendre ma place...</p>
                        <p class="fadeIn txtFive">...Mon fils...</p>
                        <button class="button flexRow fadeInBtn btnSix buttonDefeatBoss">
                            <a href="./controllers/updateUser.php" id="end">Vous devenez le Roi-Sorcier à la place de <?= $lastBoss ?></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="skills">
            <div id="health" class="navHhealth">100/100 PV</div>
            <div id="attack" class="navAttack">30 ATK</div>
            <div id="xp" class="navXp">0 XP</div>
            <div id="potion" class="navPotion">2/2 P</div>
        </div>
    </section>
</main>
<script src="js/class.js"></script>
<script>
    const endBoss  = new Character("<?= $lastBoss ?>", 300, 20, 300);
    const player = new Character("<?= $user['name'] ?>", 100, 30, 0);
</script>
<script src="js/main.js"></script>
<script src="js/story.js"></script>

</body>
</html>