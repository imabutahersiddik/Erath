const bannedWords = ["0013langford", "007angels", "00webcams", "037jav", "0xxx", "1-last-fight", "1.hot-dances", "1001jav", "100200film", "100amateurvideos", "100bestpornsites", "101boyvideos", "101hentai", "101sexsecret", "110percentnatural", "11inchesbuffed", "123avalon", "1337x", "171gifs", "18-teen-porn", "18-teen-sex", "18-teen-tube", "18comix", "18eighteenz", "18firstsex", "18girlssex", "18sexyasians", "18teen-tube", "18teenieshub", "18teenporn", "18tubefuck", "18vr", "18yearsold", "19angels", "1adult", "1by-day", "1mobilecash", "1on1sexwebcams", "1sexsex", "1st-virgin", "1stmovieclub", "1virgins", "1yummygirl", "2001positions", "2013znakomstva.datingsprivate2013", "2094956861", "21sextury", "21x", "2adultflashgames", "2bigtobetrue", "2busty", "2cam", "2chickssametime.naughtyamerica", "2d-market", "2damnhot", "2gfx", "2jav", "2virgins", "300webcams", "321webcams", "3angelsvideo", "3animalsex", "3arabicporn", "3arabporn", "3at3ot", "3dxchat", "3javdaily", "3redangels", "3sex", "3thehardway", "3virgin", "3x", "3xplanet", "3xprivatemilfsex", "3xtraffic", "403.hqhost", "404.elitedollars", "404.hqhost", "404", "404.quickbuck", "404.ragecash", "40best", "420chan", "429tube", "4affiliate", "4desiz", "4porn", "4sexwebcams", "4tube", "4uck", "500girls", "5starangels", "60milfs", "69-sexgames", "69-webcams", "69games", "69prasempre", "69teensex", "69teentube", "6chat", "6eez", "6mature9", "7.easyxtubes", "7chan", "7virgin", "85.17.187.83", "85porn", "88gals", "91jav", "99cams", "99webcams", "9hz", "a-angel.skyblog", "a-b-p-group", "a-lot-of-nudes.ginandgyn", "a.gaytube", "a4w", "a5.x-traceur", "a7.x-traceur", "a97.nudevista", "a98.nudevista", "a99.nudevista", "aaliyahlove", "aaronsangels", "abbyaae", "abellalist", "abl-angels.deluxepass", "aboutangelinajolie", "aboutgirlslove", "aboutsexxx", "abrutis", "abs.redbills", "absolute-live", "abtracker.adultbouncer", "abundantes", "access.alsscan", "access.aziani", "access.cbtandballbusting", "access.eroticbeauty", "access.errotica-archives", "access.eternaldesire", "access.gangbangcreampie", "access.hollyrandall", "access.inescapablebondage", "access.met-art", "access.metart", "access.metartx", "access.rachelaziani", "access.rylskyart", "access.sexart", "access.smuttypass", "access.stunning18", "access.thelifeerotic", "access.unlimitedaccesspass", "access.vivthomas", "acmexxx", "actual-porn", "ad.blackystars", "ad.jokeroo", "ad.pornfuzepremium.videobox", "ad.sexcount", "ad1.doublepimp", "ad2.doublepimp", "adamandeve", "adameve", "adb.fling", "adcontrol.lonestarnaughtygirls", "address.9hz", "adenofdevils", "adflash.affairsclub", "adimages.myjizztube", "adimages.watchmygf", "admin.amateurgalls", "admin.oldpornsite", "admost", "adorablevickylive", "adoredcassie", "adressesx", "adriana-sage", "ads.4tube", "ads.adtube", "ads.adultfriendfinder", "ads.adultpopunders", "ads.adultswim", "ads.alt", "ads.amaland", "ads.amateurmatch", "ads.asexstories", "ads.asiafriendfinder", "ads.bgfree", "ads.bondage", "ads.brazzers", "ads.cinemaden", "ads.datinggold", "ads.doubleviking", "ads.ero-advertising", "ads.eropower", "ads.exoclick", "ads.friendfinder", "ads.fuckingmachines", "ads.gamelink", "ads.germanfriendfinder", "ads.gofuckyourself", "ads.h2porn", "ads.hornypharaoh", "ads.host.camz", "ads.i-am-bored", "ads.iknowthatgirl", "ads.jerk2it", "ads.jewishfriendfinder", "ads.juicyads", "ads.lesbianpersonals", "ads.lovercash", "ads.loveshack", "ads.maleflixxx", "ads.mofos", "ads.mucunki", "ads.myjizztube", "ads.outpersonals", "ads.passion", "ads.playboy", "ads.playboy", "ads.pornerbros", "ads.premiumaccounts", "ads.privatefeeds", "ads.purefuck", "ads.redlightcenter", "ads.sexandsubmission", "ads.sexier", "ads.sextvx", "ads.streamlivesex", "ads.sxx", "ads.ultimatesurrender", "ads.usercash", "ads.usualgirls", "ads.videosz", "ads.virgin", "ads.vporn", "ads.watchmygf", "ads.waterbondage", "ads.webcamclub", "ads.whippedass", "ads.wiredpussy", "ads.wtfpeople", "ads.xhamster", "ads.xxxbunker", "ads0.videosz", "ads01.9hz", "ads1.tuccus", "ads2.brazzers", "ads2.contentabc", "ads2.ero-advertising", "ads2.tuccus", "adserver.adultfriendfinder", "adserver.asiafriendfinder", "adserver.bondage", "adserver.cams", "adserver.friendfinder", "adserver.gallerytrafficservice", "adserver.janesguide", "adserver.juicyads", "adserver.juicybucks", "adserver.outpersonals", "adserver.passion", "adserver.penthouse", "adserver.realhomesex", "adserver", "adserver.virgin", "adsgangsta", "adspaces.ero-advertising", "adtgp", "adult-adv", "adult-arab", "adult-banner-ads", "adult-clips", "adult-dating-ads", "adult-extreme", "adult-models", "adult-profit-files", "adult-sex-games", "adult-targeted-traffic", "adult-top.worlddatingforum", "adult.adrevservice", "adult.find-fm", "adult.master-tv", "adult.phoneaccess", "adultads", "adultadworld", "adultadworld.directtrack", "adultbanners", "adultbay", "adultblogtoplist", "adultbox", "adultcash", "adultcashtraffic", "adultcomix", "adultcommercial", "adultdatelink", "adultdatingreviews", "adultdatingtraffic", "adultdeepfakes", "adultdialersolution", "adultdvdhits", "adulteroticastories", "adultflex", "adultfreex", "adultfriendfinder", "adultfriendfinders", "adultfriendfinders", "adultfriendfinders", "adultfriendfinderz", "adultfriendsearch", "adultgamescollector", "adultgameson", "adultgamesportal", "adultgamestop", "adulthostedblogs", "adultinc", "adultlinkexchange", "adultlinksco", "adultmaturepics", "adultmoda", "adultmoneymakers", "adultmoviegroup", "adultoffline", "adultpopunders", "adultpornlist", "adultrevenueservice", "adultscandy", "adultsexgame", "adulttrafficads", "adultvalleycash", "adultvideofinder", "adultwebmaster.anyxxxhere", "adultwebmastersonline", "adultxxxsexcam", "adv.adultpartnership", "adv.drtuber", "adv.h2porn", "adv.sexcounter", "advertising.entensity", "advertising.justusboys", "adverts.trojanpublishing", "advertx", "adweb2.hornymatches", "adxpansion", "aebn", "affairsclub", "affiliate-cash.tied-angels", "affiliate.thedatingnetwork", "affiliates.bizarre-mature-sex", "affiliates.crakrevenue", "affiliates.hookup", "affiliates.i-love-mature", "affiliates.lifeselector", "affiliates.mature-sexparty", "affiliates.mature-toiletsluts", "affiliates.mature", "affiliates.mature", "affiliates.old-and-young-lesbians", "affiliates.outdoor-mature", "affiliates.playboy", "affiliates.thrixxx", "affiliates.usa-mature", "affiliation-int", "affiliation", "afrilov", "agangels", "agedvideos", "agentur-angelina", "agirlknows.porndoepremium", "agnesangel", "ah-me", "ahjav", "aintgo", "akibaangels", "alaa168", "alabonnepipe", "alcuda", "alexa-xxx", "alexisvirgin", "alfamina", "alison-angel-1", "alison-angel", "alison-angel", "alisonangel", "alisonangel", "alisonangel", "alisonangel", "alisonangelmovie", "alisonangelrocks", "alisonangelzone", "alive1001sexxxx", "alivegirls", "all-shemale-video", "allcamsex", "alldayanalgifs", "allevaangelina", "allfordrocher", "allgaybdsm", "allhotcams", "allinternal", "allisonangel", "allisonangel", "allisonsangels", "allisonvirgin", "alllesbiantube", "allofgfs", "allsexblogs", "allsexhub", "allstarbabes", "allswingersclubs", "allteeens", "allvideos", "allvirgins", "almostvirgins", "alotporn", "alphaporno", "alsangel", "alsangels", "alsscan", "alsscanangels", "alt-angel", "alt", "altingramfiyati", "alyssalynn", "amabitch", "amakings", "amaland", "amamilfs", "amateur-beauties", "amateur-blogx", "amateur-porn-clips", "amateur-porn-links", "amateur-porn-tube", "amateur-porn", "amateur-pussies", "amateur", "amateur.wedoo", "amateur.xxxcounter", "amateuralbum", "amateuranalsextube", "amateurbdsmporn", "amateurblowjobporn", "amateurdevils", "amateurdump", "amateurfap", "amateurfarm", "amateurgalls", "amateurgalore", "amateurhousewifefuck", "amateurmatch", "amateurmpeg", "amateurnudes69", "amateuroldsluts", "amateurpalooza", "amateurs-gone-wild", "amateurseite", "amateursexpert", "amateursexy", "amateurslovesporn", "amateurteenlab", "amateurxxxempire", "amatorixxx", "amatporn", "amature-anal", "amazingsexx", "americanvirgins", "amfiles", "amfiles", "amourangels", "amourangels", "amp.st.virgin", "amsterdam-webcams", "amsterdamned", "amsterdamnightlife", "amyvirgin", "anal-angels", "anal-beauty", "anal-porn", "anal-webcams", "anal.mature", "analcheckup", "analdildolesbians", "analhomeporn", "analmaturetube", "analpeople", "analporn", "analpornvideos", "analsextubes", "analteenangels.21sextury", "analteenangels", "analxxxx", "analytics.pimproll", "analyzedgirls", "anamuel-careslie", "anawjarrate", "andi-pink.babelogbook", "angel-anime", "angel-archives", "angel-black.st", "angel-cassidy", "angel-collection", "angel-companions", "angel-dana.tc", "angel-dark", "angel-delite", "angel-exhib", "angel-eyes.cjb", "angel-of-heels", "angel-picpost", "angel-search", "angel-x", "angel-st", "angel.arings", "angel.cn8828", "angel.comcen", "angel.ne", "angel", "angel20", "angel4christyb", "angel4host", "angel4u.linkarena", "angela-devi", "angela-taylor", "angela", "angela", "angela", "angela.ts.free", "angela.uw", "angela1.book", "angela2000", "angela21", "angelaandrews", "angelaathomas", "angelacappetta", "angeladevi", "angeladevi.free", "angelagrant", "angelalittle", "angelamelini", "angelarchives", "angelartemis.an.ohost", "angelaryan", "angelas-sin-city", "angelas-team", "angelasalvagno", "angelasavage", "angelascloset", "angelass", "angelasummers", "angelataylor", "angelatiger", "angelbabedebs", "angelband", "angelbaseball", "angelbodywear", "angelbust", "angelbutton", "angelbutton", "angelcam", "angelcassidey", "angelcassidy", "angelcasting", "angelcat02.skyblog", "angelcharmswizard", "angelchic", "angelclip", "angelclub", "angelcrack", "angelcream", "angeldark", "angeldarkhoney", "angeldarkmovies", "angeldarkvideos", "angelday", "angeldesign", "angeldollars", "angeldust24", "angelelle", "angelesangelwitch", "angelesbuenos", "angelescitysexguide", "angelesdelared.webcindario", "angelesdivinos.webcindario", "angelesurbanos", "angeleyes", "angelface", "angelface", "angelfier", "angelfotostudio", "angelfuns.tf", "angelfuns.over-blog", "angelgabriel.over-blog", "angelglam", "angelgo885", "angelheat", "angelhousematernityhome", "angeliberty.centerblog", "angelic.book", "angelica.bella.free", "angelica.st", "angelica.tvn", "angelicabella", "angelicablack", "angelicabridges.too", "angelicaheart", "angelicales", "angelicasin", "angelicasin", "angelicavamp.ukf", "angelicax.free", "angelicbebe.vox", "angelicfilms", "angelicjeanette.00go", "angelicmichele", "angelicmusick", "angelicumalumni", "angelie", "angelien.isheet", "angelife02.skyblog", "angelika-club", "angelika-l.nr", "angelika", "angelika.myblox", "angelika", "angelikaminsk", "angelina-and-friends", "angelina-and-friends", "angelina-croft", "angelina-jolie-nue", "angelina-jolie.startkabel", "angelina-nue.over-blog", "angelina", "angelina", "angelina.home.sapo.pt", "angelina4eva", "angelinaamour", "angelinaashe", "angelinaashe", "angelinaasheblog", "angelinacrow", "angelinacrow", "angelinadevil.jouwpagina", "angelinajolie.1stok", "angelinajolie.abcpic", "angelinajolie.forumfree", "angelinajolie", "angelinalee", "angelinalove", "angelinarossi", "angelinas-bodytalk", "angelinas-cam", "angelinas-heels", "angelinavalentineblog", "angelinavirgin", "angelinax.st", "angelindevilsboots", "angeline.webcindario", "angelinna.free", "angelinoscoffee", "angelion2.home.sapo.pt", "angelique.arch.free", "angelique", "angelique134.over-blog", "angelique21.over-blog", "angeliquejerone", "angeliquekithos", "angeliques.forumactif", "angelitacosta.free", "angelitas", "angelitas", "angelkiss", "angelkissedfeet", "angell-summers.over-blog", "angellafaith", "angellong", "angellsummers", "angelmassage.fw", "angelmode", "angelmodel.book", "angelmodel", "angelmovies", "angelmpegs", "angelnicole", "angelochec", "angeloflondon", "angelofmalevolence", "angelopetibatoo.free", "angelphoto.over-blog", "angelphotos.dr.ag", "angelplace", "angels-and-demon", "angels-archive", "angels-bound", "angels-devils4u", "angels-feet", "angels-from-asia", "angels-heaven.st", "angels-in-ukraine", "angels-of-london", "angels-of-pain", "angels-of-sin", "angels-place", "angels-sydney.over-blog", "angels-tokyo", "angels-videos", "angels.altenpflege.board", "angels.land", "angels.satyrslair", "angels.tf", "angels2u", "angels4you", "angels4youleeds", "angels4yousheffield", "angelsamazing", "angelsanddaggers", "angelscarebohol", "angelscasting", "angelsdemonsmasons", "angelsdream.virtue", "angelsdublin", "angelsexclusive", "angelsfeetsite", "angelsfire", "angelsfirstaid", "angelsgalaxy.int.tf", "angelshellmouth.faithweb", "angelshot", "angelsinnmanali", "angelsinsatin", "angelsinwetts.cjb", "angelslinks", "angelslinks", "angelslinks", "angelsmist", "angelsofalabama", "angelsofamsterdam", "angelsofamsterdam", "angelsofbeauty.fsn", "angelsofblood.forumfree", "angelsofdeath", "angelsofindia", "angelsoflondon", "angelsofmemphis", "angelsofmercy", "angelsofneworleans", "angelsofnight", "angelsofthenight", "angelsofthenight.kostenloses-forum", "angelsofuniverse.forumfree", "angelsofwar", "angelsoi26.kt.fc2", "angelsordevils", "angelsordevils", "angelsouris.free", "angelsscort", "angelstolove", "angelstpg", "angelsunlimited", "angelsupport.missioncollege", "angelsweb", "angelswife", "angelswifelovers", "angeltel", "angelusagi.envy", "angelvalentine", "angelveil", "angelwhite.extra", "angelwoods", "angelys-club", "anicegoodboy", "anilos", "animal-cartoons", "animal6", "animalrating", "animals.takezoo", "animalsex-planet", "anime-angels", "animediablo", "animeidhentai", "animepornmov", "ankaraescortbayan", "ankaraliescort", "ann-angel-1", "ann-angel", "anna-angel", "annangel", "annangel.fan.free", "annangel", "annangel", "annangelishot", "annas-angels", "annasangels", "annasassets", "annavirgin", "annuaire-x", "anon-v", "anonym", "antarvasnapornvideos", "antivirgins", "anyjav", "anyporn", "anysex", "anythingos", "aphrodite.porntrack", "api.ero-advertising", "apina", "apinaporn", "apo.ero-advertising", "apornlist", "apornmovie", "applefoam", "apps-ratgeber", "aquiwebcams", "aquoid", "arab66", "arabgirlsinthehood", "arabialoveseats", "arabianchicks", "arabictopics", "arabks", "arabs3x", "arabsexweb", "arabssex", "arabvirgin", "arabvirgins", "arabysexy", "arbkos", "arcadehentai", "archangels", "archangelschool", "ard.ihookup", "ard.sexplaycam", "ard.sweetdiscreet", "ard.xxxblackbook", "ardientes", "area51", "arenaporno", "arhangelsk", "arkhangelskiy", "arrobapay", "articles.rsdnation", "artserotica", "artworks-blog", "as.sexad", "asaakira", "asciipr0n", "asertukko", "asexstories", "asexyblonde", "ashemaletv", "asia-virgins", "asiablue", "asian.livecamfun", "asian.streamate", "asian.xxxcounter", "asianbutterflies", "asianparade", "asianplayboy", "asianporn-18", "asianporn.photos", "asianporndump", "asianpornmovies", "asiansex", "asiansexgfs", "asianxtv", "askjolene.ero-advertising", "asktiava", "asmhentai", "ass-overdose", "ass1st", "ass2waist", "assangels", "assdumper", "assesinpublicblogg.thumblogger", "assholefever.21sextury", "assholefever", "assisass", "assist.lifeselector", "asslyy", "asso69110", "assteenmouth", "asstomouthangels", "asstraffic", "asstraffic.xlogz", "asstubec", "assvirgin", "assvirgins", "assvirgins", "assylum.derangeddollars", "astridsangelcash", "astridsangels", "atkmodels", "atkpussies", "atmmovieblog", "atmovs", "attractivesex", "auctions.playboy", "audibleporn", "austrian-angels", "autolinkweb", "av25hrs", "av69", "avalaurenblog", "avalon.topbucks", "avatarcash", "avatars.hentai-foundry", "avenida18", "avforme", "avgle", "avmars", "avn", "awejmp", "awempire", "awesomebrunettes", "awinters", "awmads", "awms-network", "ayanaangel", "az7t1", "az7t2", "aziangals", "azianiiron", "azkempire", "b.eave.rs", "b44", "b97.nudevista", "b98.nudevista", "b99.nudevista", "babe8", "babedrop", "babedump", "babelogbook", "babes.coolios", "babesandbitches", "babesandgirls", "babesdaily", "babesfarm", "babesonwebcams", "babesource", "babesrater", "babesxworld", "babetots", "babezblog", "baby-angelesb.skyblog", "baby-angelesb.skyrock", "backdoor.thumblogger", "backseatbangers", "badassangels", "badbitchgifs", "baddaddypov", "badoinkvr", "badpuppy", "badteenspunished", "badvirgin", "badvirgins", "baeb", "baise-webcams", "baisepartout", "balanced.gtsadsdistributed", "ballbustermx", "ballbusting-chix", "ballbustingbitchesbrigade", "ballbustingcbt", "ballbustingtorture", "baltictop", "ban.erovideo", "ban.xpays", "bananabunny", "banatdream", "banditmovies", "banduraangels", "baneoftheangels.proboards106", "bangbros1", "bangbros18", "bangbrosnetwork.bangbros1", "bangbrosteenporn", "bangbus", "bangbus.xlogz", "bangteenpussy", "bangxxxteens", "bangyoulater", "banman.iafd", "bannedcelebs", "banner.celebrity-fakes", "banner.czech-sex", "banner1.pornhost", "bannerlink.xxxtreams", "bannerout", "bannerrotation.sexmoney", "banners.777-xxx", "banners.adultfriendfinder", "banners.adultrevenueservice", "banners.alt", "banners.amateurtour", "banners.animeerotico", "banners.asiafriendfinder", "banners.babylon-x", "banners.bookofsex", "banners.cams", "banners.celebtaboo", "banners.chicashumedas", "banners.colegialasdesvirgadas", "banners.dogfart", "banners.ero-advertising", "banners.eroadvertising", "banners.fuckbookhookups", "banners.fuckingdrunks", "banners.gayfriendfinder", "banners.hornywife", "banners.icams", "banners.jewishfriendfinder", "banners.lesbianascerdas", "banners.mynakedweb", "banners.outster", "banners.passeilimitado", "banners.payserve", "banners.penthouse", "banners.prazerlesbico", "banners.realitycash", "banners.rexmag", "banners.rude", "banners.sexsearch", "banners", "banners.sotransexuais", "banners.swapfinder", "banners.voyeurweb", "banners2.ero-advertising", "banners2.eroadvertising", "banners2.fuckyoucash", "barbcummings", "barefootvixens", "barevirgins", "basal", "bazoocam", "bbp.juggcrew", "bbw.sexyads", "bbwsexpicsmovies", "bbwxxxchat", "bdsm-zone", "bdsmboard", "bdsmlibrary", "bdsmofficial", "bdsmpichunter", "bdsmstreak", "bdsmtheory", "bdsmxxxmovies", "bdsmyou", "beachboobs", "beachtoplist", "beardysfilthemporium", "beautiful-nudes", "beautifulangels", "beautifulass.sensualwriter", "beautifulaudrey", "beauty-angels", "beauty4k", "beeg", "beerandshots", "befuck", "bejav", "bellaporn", "benaughty", "benbigben7", "bersek", "best-free-porn-sites", "best-paypornsites", "best-paypornsites", "best-virgins", "best.amateursecrets", "best10", "best10pornsites", "best10pornweb", "bestamateursporn", "bestanalpornsites", "bestandfreeporn", "bestangels", "bestarabpicinthenet", "bestarabtube", "bestblowjobvids", "bestcrazyvideos", "bestfreepornvideos", "bestfreetube", "besthandjobporn", "besthdsexvideo", "besthotdates", "bestlist", "bestlistofporn", "bestlivecamgirls", "bestofbritneyamber", "bestphatchicks", "bestporn", "bestporn24", "bestpornamateur", "bestpornbabes", "bestpornever", "bestpornmenu", "bestpornsites", "bestpornsites", "bestpornsites", "bestsexualpleasure", "bestxxxfuck", "beta.members.naughtyamerica", "betterhdporn", "bgclive", "bicuriousbabyy", "bigbangempire", "bigbbwtube", "bigboobbettys", "bigboobs", "bigboobsparadise", "bigboobswebcams", "bigbootytube", "bigcocker", "biggested", "biglady.mature", "bignatural", "bignaturalknockers", "bignaturals-movies", "bignaturals", "bignaturals", "bigtitangels", "bigtitsonwebcams", "bigtitsroundasses.bangbros1", "biguy7", "billpics", "bimbo", "biqle", "bitchdump", "bitingass", "bitshare", "bizarremania", "bizzarre.adult.directnic", "black.xxxcounter", "blackamateurfuck", "blackandshiny", "blackangel-halle", "blackangelica", "blackangelvideo", "blackassangels", "blackgfpass", "blackgfsex", "blacklesbianporn", "blacksbigwomenssexy", "blacksfatswomensex", "blacksnake", "blackvirgins", "blackystars", "blackz", "bleachpixxx", "bleedingvirgins", "blitz-natursekt", "blog.babeland", "blog.cartoonvalley", "blog.chaturbate", "blog.ferronetwork", "blog.freejuicywebcams", "blog.gfrevenge", "blog.masturbate2gether", "blog.mrpinks", "blog.pinkworld", "blog.sinnandskinn", "blog.yobt", "blog.youporn", "blogangela", "blogbang", "blogbugs", "bloggers.fuckyoucash", "blogs-list", "blogtur", "blondangel", "blondangels", "blondewebcams", "blondexxxmag", "bloodangels", "bloodyvirgin", "blow-jobs", "blowingangels", "blowingkisses", "blowjobvideos", "blowxxxtube", "blue.sexer", "blueangel", "blueangel57.over-blog", "bluewebcams", "bn.premiumhdv", "board.freeones", "bob.crazyshit", "bobiporn", "bobs-tube", "bokep360", "bokeptop", "bollywoodporn", "boltontits", "bonabanners", "bondage-gifs", "bondage.adult.directnic", "bondagebank", "bondagecompanion", "bondagewebcams", "bongacams", "bongacash", "boobcritic", "boobies-daily", "boobs-4u", "boobscategory", "boobsinmotion", "boodigo", "book.watch4beauty", "bookmarklinks", "bookofsex", "bootycallfriends", "bootyfix", "bootyoftheday", "boredjumbo", "born2bownedbyblack", "borwap", "bosom", "botw.topbucks", "boundandbanged", "boundx0beauty", "bountyhunterporn", "boxingbeanscbtblog", "boyfriendnetwork", "boypost", "boysandmom", "boysfood", "br.fling", "br.meetlocals", "br.realitykings", "br.rk", "bradborrellixxx", "brandibelle.bangbros1", "brandnewfaces", "brandys-box", "brattysis", "bravomediagroup", "bravoteens", "bravotube", "bravsbookmarks", "brazilvirgin", "brazilvirgina", "brazzers", "brazzershd", "brazzersnetwork", "brdteengal", "breathlessangel", "breathlesswhispers", "briannajordan", "briceangel.over-blog", "brickhousebetty", "brightdesire", "bristollair", "britishcoeds", "britneyvirgin", "broadcaster.streamate", "bronzeadultblogs", "brothelangelsladies", "browneyedangel83.freewebpages", "brunetteangel", "brunetteangels", "brutalfetish", "brutalinvasion", "brutalviolence", "bs.drtuber", "btas.juggcrew", "bubblebuttbonanza", "bubblebuttsgalore", "buck-angel", "buckangel-paradijs", "buckangel", "buckangel.maakjestart", "buckangel", "buckangelbucks", "buckangelvod", "buffbuns", "bukkake", "bullporn", "bumsfilme", "bunny-net", "bunnyteensmovies", "burningangel", "burningangel", "burningcamel", "burningcamel", "bursa.escortgirl.asia", "bursahaliyikamak", "bursasporteam", "buscadordewebcams", "bushgig", "business-angel", "busty-asian", "bustyvixen", "buttnakedinthestreets", "buzzwebcams", "bwlesbians", "bx.pornotgp", "byot.adultrevenueservice", "bzazi", "c1.outster", "c1.x-traceur", "c1.xxxcounter", "c2.outster", "c2.xxxcounter", "c3.outster", "c3.xxxcounter", "cache.daredorm", "cache.gfrevenge", "cache.realitykings", "cache.rk", "cadillacangels", "cafedeangel", "californiavirgins", "cam4", "cam4ultimate", "camawards", "cambeaver", "cambunny", "camcaps", "camchatcontacts", "camcorderxxx", "camdoz", "camelcookie", "camelmedia", "camelstyle", "camfloozy", "camgasm", "camjuice", "camonster", "campeeks", "campreferral", "cams.bdsmlibrary", "cams", "cams.sexmummy", "camsangels", "camsearch", "camshunt", "camster", "camwhores", "camwithher", "camworld", "camz", "camzter", "canalwebcams", "candidbeachangels", "cantender", "cantfitinbikeshorts", "captainramirez123", "captiveangels", "cardsgate-cs", "carlhardwick", "carpediem", "cartoon-3x", "cartoon-sex", "cartoonpornguide", "cartoonpornvideos", "cartoonsexsite", "cartoontube", "cartoonvalley", "carumbas", "cash4members", "cashangel", "cashlayer", "cassies-classy-lassies.thumblogger", "castingcouch-x", "cat-clothes", "catalinacruz", "categories", "cbird", "cbmb1", "cbt-fetish", "cbtextremeuk", "ccgals", "cdn-i-am-bored", "cdn.alleliteads", "cdn.engine.phn.doublepimp", "cdn.feeds.videosz", "cdn.mb.datingadzone", "cdn.mrstiff", "cdn.niche.videosz", "cdn.nsimg", "cdn.popcash", "cdn.redlightcenter", "cdn.sexvid", "cdn.watchmygf", "cdn1.ads.brazzers", "cdn1.dansmovies", "cdn1.premiumhdv", "cdn1.sexvid", "cdn2.ads.datinggold", "cdn2.dansmovies", "cdn2.sexvid", "cdn3.sexvid", "cdn4.dansmovies", "cdn4.sexvid", "cdn5.sexvid", "cearalynch", "celeb.gate", "celebflix", "celebnudes4u", "celebritiesonvideo.thumblogger", "celebrity-captures", "celebrity-fakes", "celebritytube", "celebritytube", "celebritywar", "celebsdaddy", "celebsking", "celebsnude", "celebsroulette", "celebsuncensored", "celebtaboo", "ceritasexabg", "cesky-sex", "cfake", "cfnmidol", "cfnmteens", "cgi", "cgi1", "champnewgameronline", "chan.sankakucomplex", "changelingpress", "changels", "charlisangels", "charming-angels", "chat-webcams", "chat.adultfriendfinder", "chatboxwebcams", "chatischat", "chatorgasm", "chatrandom", "chatroulette", "chatspin", "chaturbate", "cheapadultdvd", "cheekybanners", "cheerleader-webcams", "cheggit", "cherry-boobssex", "cherrynovelty", "cherrypimps", "chezangelique.free", "chibiangel86.bravejournal", "chicaangelical", "chicasconwebcams", "chicasenwebcams", "chicashumedas", "chicaswebcams", "chickenbanners", "chickenhost", "chinese-angels", "chinmaster", "chloes-angels", "chopsticktube", "chris.virginradioblog", "chrisangel", "christinaangel", "christycanyon", "chubby-teen", "chubbyloving", "chubbyparade", "chubbyworlds", "chunkyangels", "chunkybutts", "chunkytgp", "chupaminhabct", "chupandocomhallspreto", "chupo-vc", "chyoa", "cinemaden", "cinemahdporn", "cinextravadaz.blogs.allocine", "circleofxxx", "citysex", "clamsangels", "classy-angel", "classyangel", "click.classaffiliates", "click.dtiserv2", "click.idesires", "click.mistressofasia", "click.nudevista", "click.payserve", "click.revsharecash", "click.sexmoney", "click.taincash", "click.tmfmoney", "click.top10sites", "click.xxxofferz", "click2wap", "click4porn", "clickflow", "clickheat.topbucks", "clicks.babylon-x", "clickthru.aebn", "clicktrack.wnu", "clik.spxroute", "clip31", "cliphunter", "clipsage", "clipsforjerkoff", "clit", "clit1-tracker", "clit1", "clit1", "clit10-tracker", "clit10", "clit10", "clit11-tracker", "clit11", "clit11", "clit12-tracker", "clit12", "clit12", "clit120.outster", "clit13", "clit14", "clit15", "clit16", "clit2-tracker", "clit2", "clit2", "clit3-tracker", "clit3", "clit3", "clit4-tracker", "clit4", "clit4", "clit5-tracker", "clit5", "clit5", "clit50.outster", "clit6-tracker", "clit6", "clit6", "clit7-tracker", "clit7", "clit7", "clit8-tracker", "clit8", "clit8", "clit9-tracker", "clit9", "clit9", "cliter", "clitgames", "cloudshares", "club-angelinavalentine", "club-ass", "club-evaangelina", "club-virgins", "clubaudriannaangel", "clubbestangels", "cluberosatlanta", "clubevaangelina", "clubrejal", "clubsandy.21sextury", "clubseventeen", "clubseventeenvideos", "clubvirgins", "cluster-03.topbucks", "cluster.adultadworld", "cluster3.adultadworld", "cock-desire", "cockyboys", "cockyeyedtwat", "cocogals", "colegialasdesvirgadas", "colegialasdeverdad", "colegialasreales", "colegialasxvideos", "colette", "coliriodemacho", "collectionofbestporn", "collectionofbestporn", "college-webcams", "collegegirlwebcams", "collegehdsex", "collegerules", "collegeteentube", "collegevirgins", "collegewildparties", "colliderporn", "comicunivers", "commetvidsnow", "confessionangel", "conquerorofvirgins", "content.adameve", "content.nuvid", "content.pop6", "content.thrixxx", "content1.adameve", "content2.adameve", "content3.adameve", "contents-explorer", "contrib-amateurs", "coole-app", "copro", "copyrait", "coquine-angeline", "cosplayporn", "cougar-rencontre", "cougarlife", "cougarsandcream", "count.fuckunion", "counter.adultrevenueservice", "counter.sexsuche", "counter1", "counter1", "counter10", "counter10", "counter11", "counter11", "counter12", "counter12", "counter13", "counter14", "counter15", "counter16", "counter2", "counter2", "counter3", "counter3", "counter4", "counter4", "counter5", "counter5", "counter6", "counter6", "counter7", "counter7", "counter8", "counter8", "counter9", "counter9", "counterimg1.adultrevenueservice", "couplesseduceteens", "courtneyuncovered.vividceleb", "courtneyvirgin", "cover9.adultfriendfinder", "crackbabes", "crakmedia", "crazyangel", "crazydumper", "crazyoldmoms", "crazyshit", "crazytoonsex", "crazywebcams", "crazyxxx3dworld.3dcomics", "crazyxxx3dworld", "creamasia.adult.directnic", "creamgoodies", "creamyangels", "crefviby", "creoads", "crocko", "crocotube", "crot69", "crotchtime", "cryangel", "cs.sexcounter", "ctc.japaneseanime", "cuckold-wife.x-fetish", "cuckold69", "cuckoldinterracialwife", "cuckoldporntube", "cuckoldsessions", "cuckoldwifetube", "cum4all", "cum4k", "cumaholicteens", "cumclip", "cumdisgrace", "cumforcover", "cummypantyhose", "cumpleaser", "cumridden", "cumshotlist"]; 

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  const textArea = document.getElementById("html-code");

  if (textArea) { // Check if the textarea element exists
    textArea.addEventListener("input", function() {
      let text = this.value;
      bannedWords.forEach(word => {
        let regex = new RegExp(`\\b${word}\\b`, "gi"); 
        text = text.replace(regex, "*".repeat(word.length)); 
      });
      this.value = text;
    });
  } else {
    console.error("Textarea with ID 'sensor' not found!");
  }
});