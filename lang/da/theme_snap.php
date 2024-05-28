<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @copyright  Copyright (c) 2024 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutcourse'] = 'Om dette kursus';
$string['activity'] = 'Aktivitet';
$string['action:changeassetvisibility'] = 'ændr aktivsynlighed';
$string['action:duplicateasset'] = 'duplikér aktiv';
$string['action:changesectionvisibility'] = 'ændr sektionssynlighed';
$string['action:highlightsectionvisibility'] = 'fremhæv sektionssynlighed';
$string['action:sectiontoc'] = 'få afsnittet indholdsfortegnelse';
$string['addanewsection'] = 'Opret en ny sektion';
$string['addresourceoractivity'] = 'Opret læringsaktivitet';
$string['admin'] = 'Admin';
$string['advancedbrandingheading'] = 'Avanceret branding';
$string['ago'] = 'siden';
$string['answered'] = 'Besvaret';
$string['appendices'] = 'Værktøjer';
$string['arialabelnewsarticle'] = 'nyhedsartikel';
$string['assigndraft'] = 'Kladde kræver din bekræftelse';
$string['assignreopened'] = 'Genåbnet';
$string['at'] = 'klokken';
$string['attempted'] = 'Forsøgt';
$string['basics'] = 'Grundlæggende';
$string['brandingheading'] = 'Branding';
$string['browse'] = 'Gennemse';
$string['browseallcourses'] = 'Gennemse alle kurser';
$string['cachedef_activity_deadlines'] = 'Cachelager for en brugers aktivitetsdeadlines.';
$string['cachedef_generalstaticappcache'] = 'Fastgør generel statisk cache på applikationsniveau';
$string['cachedef_course_completion_progress'] = 'Dette bruges til at cachelagre fuldførelsesdata pr. kursus/bruger.';
$string['cachedef_course_completion_progress_ts'] = 'Dette bruges, så vi kan ugyldiggøre cachelagre på sessionsniveau, hvis et kursus\' eller moduls indstillinger for kursusgennemførelse ændrer sig.';
$string['cachedef_webservicedefinitions'] = 'Cachelagring for automatisk genererede webtjenestedefinitioner.';
$string['card'] = 'Kort';
$string['categoryedit'] = 'Rediger kategori';
$string['category_color'] = 'Kategorifarve';
$string['category_color_description'] = 'Farve for kursuskategori. Underordnede kurser tager den nærmeste overordnede kategorikonfiguration';
$string['category_color_palette'] = 'Farvepalet';
$string['category_color_palette_description'] = 'Se den tilsvarende hexidecimale værdi for den givne farve. Dette påvirker ikke nogen konfigurationer, men er blot en prøve, der kan hjælpe brugere med at opbygge konfigurationsværdien.';
$string['changecoverimage'] = 'Skift coverbillede';
$string['changefullname'] = 'Skift webstednavn';
$string['chapters'] = 'Kapitler';
$string['choosereadme'] = '<div class="clearfix"><div class="theme_screenshot"><h2>Snap</h2><img class=img-polaroid src="snap/pix/screenshot.jpg" /></div></div>';
$string['close'] = 'Luk';
$string['conditional'] = 'Betinget';
$string['contents'] = 'Indhold';
$string['contributed'] = 'Bidraget';
$string['courses'] = 'Kurser';
$string['coursecontacts'] = 'Kursuskontakter';
$string['coursedisplay'] = 'Kursusvisning';
$string['coursefootertoggle'] = 'Kursussidefod';
$string['coursefootertoggledesc'] = 'Kursussidefoden viser brugere nyttige oplysninger på en kursusside, herunder kursuskontakter, kursusbeskrivelser og den seneste aktivitet i kurset.';
$string['courseformatnotification'] = 'Det kursusformat, som du bruger på nuværende tidspunkt, understøttes ikke fuldt ud af Snap-temaet. For at få den bedste oplevelse, anbefaler Open LMS at bruge kursusformaterne "Emner" eller "Ugentligt" sammen med Snap-temaet. Kursusformatet kan ændres under <a href="{$a}">kursusindstillingerne</a>.';
$string['coursefixydefaulttext'] = 'Du er i øjeblikket ikke tilmeldt nogen kurser.<br>De kurser, du er tilmeldt, vil blive vist her.';
$string['coursegrade'] = 'Kursuskarakter:';
$string['coursepartialrender'] = 'Aktivér udskudt indlæsning for kursusaktiviteter';
$string['coursepartialrenderdesc'] = 'Hvis dette er aktiveret, vil kursussektioner blive indlæst efter behov, når de vælges af en bruger. Dette vil hjælpe kurser med en stor mængde indhold til at indlæse hurtigere.';
$string['coursenavigation'] = 'Kursusnavigation';
$string['coursesummaryfilesunsuitable'] = 'Tøm dine kursusoversigtsfiler, før du forsøger at ændre forsidebilledet';
$string['courseactionslabel'] = 'Handlinger';
$string['courseactivitieslabel'] = 'Sektionsaktiviteter';
$string['coursetools'] = 'Dashboard for kursus';
$string['coverdisplay'] = 'Forsidevisning';
$string['covercarousel'] = 'Forsidekarussel';
$string['covercarousellabel'] = 'Karrusel';
$string['covercarouselon'] = 'Brug forsidekarrusel';
$string['covercarouseldescription'] = '<p>Karrusellen er et sæt roterende bannere eller et slideshow, der vises på dit websteds startside i stedet for forsidebilledet.</p>
<p>Tilføj op til 3 billeder, en titel til hver slide og en valgfri tekst. Billeder på 1200 x 600 pixels fungerer bedst.</p>';
$string['covercarouselsronly'] = 'Dette er en karrusel med automatisk roterende slide. Aktivér en af knapperne for at deaktivere rotationen. Brug knapperne Næste og Forrige til at navigere eller gå til en slide ved hjælp af slideprikkerne.';
$string['covercarouselplaybutton'] = 'Genoptag karrusellens automatiske sliderotation.';
$string['covercarouselpausebutton'] = 'Sæt automatisk karrusellens sliderotation på pause.';
$string['coverimage'] = 'Forsidebillede';
$string['covervideo'] = 'Forsidevideo';
$string['comingsoon'] = 'Kommer snart!';
$string['createsection'] = 'Opret sektion';
$string['current'] = 'Aktuel';
$string['customcss'] = 'Brugerdefineret CSS';
$string['customcssdesc'] = 'Husk venligst, at der med store evner følger et stort ansvar. Det er dit eget ansvar at løse eventuelle problemer, som forårsages af CSS, der er tilføjet her. Open LMS-support indeholder ikke fejlfinding og yder ikke hjælp til CSS-relateret indhold.';
$string['customtopbar'] = 'Navigationslinje';
$string['customisenavbar'] = 'Ændr navigationslinjens farver';
$string['customisenavbutton'] = 'Ændr farverne på knappen Mine kurser';
$string['customisecustommenu'] = 'Skift tekstfarve for brugerdefineret menu';
$string['custommenutext'] = 'Tekstfarve for brugerdefineret menu';
$string['deadlines'] = 'Deadlines';
$string['deadlinestoggle'] = 'Deadlines';
$string['deadlinestoggledesc'] = 'Vis brugere kommende aktivitetsdeadlines fra kurser, som de er tilmeldt.';
$string['defaultsummary'] = 'Brug dette område til at beskrive, hvad dette emne omhandler – med tekst, billeder, lyd og video.';
$string['defaultintrosummary'] = 'Velkommen til dit nye kursus {$a}.<br>Begynd med at beskrive dit kursus ved hjælp af tekst, billeder, lyd og video.';
$string['defaulttopictitle'] = 'Emne uden titel';
$string['debugerrors'] = 'Fejlfinding';
$string['deleteassetconfirm'] = 'Slet {$a}';
$string['deletingasset'] = 'Sletter {$a}';
$string['deletingassetname'] = 'Sletter {$a->type} "{$a->name}"';
$string['deletesectionconfirm'] = 'Slet sektion';
$string['deletingsection'] = 'Sletter sektion "{$a}"';
$string['draft'] = 'Ikke udgivet til studerende';
$string['dropzonelabel'] = 'Slip filerne for at vedhæfte dem eller <span class="fake-link">browse</span>';
$string['due'] = 'Forfalder {$a}';
$string['edit'] = 'Rediger "{$a}"';
$string['editcoursecontent'] = 'Rediger blokke';
$string['editcoursesettings'] = 'Kursusindstillinger';
$string['editcoursetopic'] = 'Rediger sektion';
$string['editcustomfooter'] = 'Rediger sidefod';
$string['editcustommenu'] = 'Rediger brugerdefineret menu';
$string['error'] = 'Fejl';
$string['errorgettingfeed'] = 'Der opstod en fejl under hentning af feedelementer.';
$string['error:categorycolorinvalidjson'] = 'Forkert JSON-format for kursuskategorier';
$string['error:categorycolorinvalidvalue'] = 'Post-ID eller farveværdi for kategorien "{$a}" er ikke gyldigt';
$string['error:categorynotfound'] = 'Kategoriposten med ID\'et "{$a}" er ikke blevet fundet';
$string['error:coverimageexceedsmaxbytes'] = 'Forsidebilledet overstiger den maksimalt tilladte størrelse for filer på webstedsniveau ({$a})';
$string['error:coverimageresolutionlow'] = 'For at opnå den bedste kvalitet anbefaler vi et større billede med en bredde på mindst 1024 px.';
$string['error:duplicatedcategoryids'] = 'Forkert JSON-format, nogle ID\'er er duplikerede';
$string['error:failedtochangeassetvisibility'] = 'Det lykkedes ikke at skjule/vise aktivet';
$string['error:failedtochangesectionvisibility'] = 'Det lykkedes ikke at skjule/vise sektionen';
$string['error:failedtohighlightsection'] = 'Det lykkedes ikke at fremhæve sektionen';
$string['error:failedtoduplicateasset'] = 'Det lykkedes ikke at duplikere';
$string['error:failedtodeleteasset'] = 'Det lykkedes ikke at slette aktivet';
$string['error:failedtotoc'] = 'Kunne ikke hente TOC.';
$string['extension'] = 'Udvidelse {$a}';
$string['facebook'] = 'Facebook';
$string['facebookdesc'] = 'URL-adresse til din Facebook-side.';
$string['favicon'] = 'Favicon';
$string['favicondesc'] = 'Faviconer vises i din webbrowsers adresselinje, i en brugers bogmærker og mobile genveje.';
$string['favorite'] = 'Favorit {$a}';
$string['favorited'] = 'Valgt som favorit {$a}';
$string['featurespots'] = 'Funktionsspots';
$string['featurespotsedit'] = 'Rediger funktionsspots';
$string['featurespotshelp'] = '<p>Tilføj op til 3 højdepunkter til dit websteds forside for at fremhæve de primære fordele for aktuelle og potentielle brugere.</p>
<p>Du kan føje et billede, en titel og en indholdsbeskrivelse til hver funktion. For at se funktionen på forsiden skal du angive en titel. Sektionerne til beskrivelse af billeder og indhold er valgfrie.</p>
<p>Den anbefalede billedstørrelse er en firkant og ikke større end 200 px gange 200 px.</p>';
$string['featurespotsheading'] = 'Overskrift til funktionsspots';
$string['featureonetitle'] = 'Titel til funktion 1';
$string['featuretwotitle'] = 'Titel til funktion 2';
$string['featurethreetitle'] = 'Titel til funktion 3';
$string['featureonetitlelink'] = 'Titellink til funktion 1';
$string['featuretwotitlelink'] = 'Titellink til funktion 2';
$string['featurethreetitlelink'] = 'Titellink til funktion 3';
$string['featuretitlelinkdesc'] = 'Skriv den URL, du vil linke dette funktionssted til. Du kan tilføje eksterne eller interne links på dit websted. For at tilføje et internt link skal du kopiere det fra webstedets URL inklusive /. Hvis du for eksempel skal have et link til et kursus, vil det være "/kursus/view.php?id=160". For at tilføje et eksternt link skal du starte linket med https://';
$string['featureonetitlecb'] = 'Funktion 1 er åben i et nyt vindue';
$string['featuretwotitlecb'] = 'Funktion 2 er åben i et nyt vindue';
$string['featurethreetitlecb'] = 'Funktion 3 er åben i et nyt vindue';
$string['featuretitlecbdesc'] = 'Hvis aktiveret vil det tilføjede link blive åbnet i et nyt vindue.';
$string['featureonetext'] = 'Indhold til funktion 1';
$string['featuretwotext'] = 'Indhold til funktion 2';
$string['featurethreetext'] = 'Indhold til funktion 3';
$string['featureoneimage'] = 'Billede til funktion 1';
$string['featuretwoimage'] = 'Billede til funktion 2';
$string['featurethreeimage'] = 'Billede til funktion 3';
$string['featuredcourses'] = 'Udvalgte kurser';
$string['featuredcourseshelp'] = 'Fremhæv op til 8 udvalgte kurser på dit websteds forside. Indtast kursus-id\'et for at fremhæve et kursus.';
$string['featuredcoursesheading'] = 'Overskrift til fremhævede kurser';
$string['featuredcourseone'] = 'Fremhævet kursus 1';
$string['featuredcoursetwo'] = 'Fremhævet kursus 2';
$string['featuredcoursethree'] = 'Fremhævet kursus 3';
$string['featuredcoursefour'] = 'Fremhævet kursus 4';
$string['featuredcoursefive'] = 'Fremhævet kursus 5';
$string['featuredcoursesix'] = 'Fremhævet kursus 6';
$string['featuredcourseseven'] = 'Fremhævet kursus 7';
$string['featuredcourseeight'] = 'Fremhævet kursus 8';
$string['featuredcoursesedit'] = 'Rediger fremhævede kurser';
$string['featuredcoursesbrowseall'] = 'Gennemse alle kurser';
$string['featuredcoursesbrowsealldesc'] = 'Tilføj et link til at gennemse alle kurser';
$string['feature_spot_background_color'] = 'Baggrundsfarve';
$string['feature_spot_title_color'] = 'Titlens tekstfarve';
$string['feature_spot_description_color'] = 'Beskrivelsens tekstfarve';
$string['feature_spot_title_color_lower'] = 'Titlens tekstfarve';
$string['feature_spot_description_color_lower'] = 'Beskrivelsens tekstfarve';
$string['feedbackavailable'] = 'Tilgængelig feedback';
$string['feedbacktoggle'] = 'Feedback og karaktergivning';
$string['feedbacktoggledesc'] = 'Vis studerende deres seneste feedback og undervisere de seneste svar, der skal have en karakter.';
$string['footnote'] = 'Webstedets sidefod';
$string['footnotedesc'] = 'Du kan tilføje dine webstedsoplysninger som HTML og medtage links, billeder eller begivenhedslister.';
$string['forcepwdwarningpersonalmenu'] = 'Du skal <a href="{$a}">ændre din adgangskode</a>, før du bruger den personlige menu.';
$string['forumauthor'] = 'Forfatter';
$string['forumlastpost'] = 'Sidste indlæg';
$string['forumpicturegroup'] = 'Gruppe';
$string['forumreplies'] = 'Svar';
$string['forumtopic'] = 'Emne';
$string['forumposts'] = 'Forumindlæg';
$string['forumpoststoggle'] = 'Forumindlæg';
$string['forumpoststoggledesc'] = 'Vis brugere de 10 seneste forumindlæg fra deres kurser.';
$string['fullname'] = 'Webstedsnavn';
$string['fullnamedesc'] = 'Dit websteds navn.';
$string['graderadviseuserreport'] = '"Karaktergiverrapporten" fungerer ikke optimalt på mobile enheder. "Brugerrapporten" anbefales i stedet';
$string['grading'] = 'Karaktergivning';
$string['help'] = 'Hjælp';
$string['helpguide'] = 'Hjælpeguide';
$string['headingfont'] = 'Overskriftens skrifttype';
$string['headingfont_desc'] = 'Denne skrifttype (sans-serif) bruges i overskrifterne (h1-h6-elementer) på dit websted. Hvis du inkluderer en brugerdefineret webtypografi, skal du huske at tilføje den til Moodles formular for yderligere HTML. Hvis du vil ændre skrifttype for andre elementer, skal du venligst bruge valgmuligheden Brugerdefineret CSS. Se venligst eksempler på, hvordan du gør dette, i denne <a href="https://help.openlms.net/en/administrator/manage-a-site/snap-font-family-with-custom-css/" target="_blank">dokumentation</a>.';
$string['helpwithlogin'] = 'Hjælp med login';
$string['helpwithloginandguest'] = 'Hjælp med login/gæsteadgang';
$string['loginrequiredmessage'] = '* betyder, at det er et obligatorisk felt';
$string['hiddencoursestoggle'] = 'Skjulte kurser';
$string['highlightedsection'] = 'fremhævet';
$string['home'] = 'start';
$string['image'] = 'billede';
$string['images'] = 'Billeder';
$string['instagram'] = 'Instagram';
$string['instagramdesc'] = 'URL-adresse til din Instagram-konto.';
$string['introduction'] = 'Introduktion';
$string['jsontext'] = 'JSON-tekst';
$string['jsontextdescription'] = 'Tekstområdet validerer den givne JSON, så kun eksisterende kategorier er tilladt. Kun numeriske værdier som ID-poster (kategoriposter) er gyldige, og kun hexadecimale værdier accepteres som farver. Her er et eksempel:<br>{"1":"#FAAFFF",<br>"45":"#AFF",<br>"65":"#FFF228",<br>"12":"#CC0084",<br>"56":"#CC0087",<br>"89":"#CCF084"}';
$string['knowledgebase'] = 'Open LMS-vidensbase';
$string['list'] = 'Liste';
$string['linkedin'] = 'LinkedIn';
$string['linkedindesc'] = 'URL-adressen til din organisations LinkedIn.';
$string['leftnav'] = 'Indholdsfortegnelse';
$string['leftnavdesc'] = 'Vælg, hvor indholdsfortegnelsen skal vises. Lister giver mere plads til indhold og fungerer godt til kurser med mange emner.';
$string['loading'] = 'Indlæser ...';
$string['loggedinasguest'] = 'Du er logget ind som gæst';
$string['loggedoutmsg'] = 'Du er logget af i øjeblikket. Hvis du ønsker at fortsætte med at bruge dette websted, skal du logge på igen.';
$string['loggedoutmsgtitle'] = 'Du er logget af';
$string['loggedoutfailmsg'] = 'Du skal være logget på {$a}.';
$string['loginform'] = 'Log på';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Dit logo vises i sidehovedet på hele webstedet.';
$string['menu'] = 'Mine kurser';
$string['messageread'] = 'Beskeden er læst';
$string['messages'] = 'Meddelelser';
$string['messagestoggle'] = 'Meddelelser';
$string['messagestoggledesc'] = 'Vis brugere deres seneste meddelelser, som de har modtaget i løbet af de seneste 12 uger. For at aktivere denne indstilling skal du sørge for, at meddelelsesfunktionen på siden Avancerede funktioner er aktiveret.';
$string['more'] = 'Mere';
$string['morenews'] = 'Flere nyheder';
$string['moreoptionslabel'] = 'Flere indstillinger';
$string['movingstartedhelp'] = 'Gå til det sted, hvor du vil anbringe sektion "{$a}"';
$string['movingdropsectionhelp'] = 'Anbring sektion "{$a->moving}" før sektion "{$a->before}"';
$string['moving'] = 'Flytter "{$a}"';
$string['movingcount'] = 'Flytter {$a} objekter';
$string['movefailed'] = 'Flytning mislykkedes for "{$a}"';
$string['move'] = 'Flyt "{$a}"';
$string['movehere'] = 'Flyt hertil';
$string['movesection'] = 'Flyt sektion';
$string['navbarbg'] = 'Baggrundsfarve';
$string['navbarlink'] = 'Tekstfarve';
$string['navbarbuttoncolor'] = 'Baggrundsfarve';
$string['navbarbuttonlink'] = 'Tekstfarve';
$string['nextsection'] = 'Næste sektion';
$string['nodeadlines'] = 'Du har ingen kommende deadlines.';
$string['noforumposts'] = 'Du har ingen relevante forumindlæg.';
$string['nograded'] = 'Du har ingen seneste feedback.';
$string['nograding'] = 'Du har ingen svar, der skal bedømmes.';
$string['nomessages'] = 'Du har ingen meddelelser.';
$string['notanswered'] = 'Ikke besvaret';
$string['notattempted'] = 'Ikke forsøgt';
$string['notcontributed'] = 'Ikke bidraget';
$string['notpublished'] = 'Ikke udgivet til studerende';
$string['notsubmitted'] = 'Ikke indsendt';
$string['overdue'] = 'Overskredet';
$string['pausegraphicsanim'] = 'Sæt GIF-animation på pause.';
$string['personalmenu'] = 'Personlig menu';
$string['personalmenuandsnapfeeds'] = 'Personlig menu og Snap-feeds';
$string['personalmenufeatures'] = 'Personlige menufunktioner';
$string['personalmenulogintoggle'] = 'Vis personlig menu ved login';
$string['personalmenulogintoggledesc'] = 'Åbner den personlige menu, så snart der er logget ind';
$string['personalmenuadvancedfeedsenable'] = 'Aktivér Avancerede feeds';
$string['personalmenuadvancedfeedsenabledesc'] = 'Avancerede feeds indlæser nogle personlige menuelementer, som tillader hurtigere indlæsningstider og opdaterer indhold efter behov.';
$string['personalmenuadvancedfeedsperpage'] = 'Antal viste elementer i "Avancerede feeds"';
$string['personalmenuadvancedfeedsperpagedesc'] = 'Vælg det antal elementer, der skal vises i feedet. Brugerne kan vælge <strong>Vis flere</strong> for at få vist yderligere elementer.';
$string['personalmenuadvancedfeedslifetime'] = 'Levetid for avancerede feeds';
$string['personalmenuadvancedfeedslifetimedesc'] = 'Vælg, hvor længe feeds cachelagres i browseren efter login. Hvis værdien indstilles til 0, cachelagres feeds ikke i browseren.';
$string['personalmenurefreshdeadlines'] = 'Opdater deadlines ved hjælp af planlagt opgave.';
$string['personalmenurefreshdeadlinesdesc'] = 'Når opgaven kører, genindlæses deadlinefata med henblik på hurtigere indlæsningstider.';
$string['personalmenuenablepersonalmenu'] = 'Aktivér personlig menu';
$string['personalmenuenablepersonalmenuheading'] = 'Personlig menu';
$string['personalmenuenablepersonalmenuheadingdesc'] = 'Bemærk: Hvis den personlige menu er deaktiveret, kan du få adgang til dine kurser fra siden Mine kurser. Sørg for, at blokken Kursusoversigt er aktiveret, så kurserne kan ses på siden.';
$string['personalmenuenablepersonalmenudesc'] = 'Linket Mine kurser åbner den personlige menu. Hvis den er deaktiveret, omdirigerer den til siden Mine kurser.';
$string['mycoursessnapfeedsheading'] = 'Snap-feeds';
$string['mycoursessnapfeedsdesc'] = 'Bemærk: <strong>Avancerede feeds</strong> bliver kun tilgængelige, når mindst én af indstillingerne <strong>Deadlines</strong>, <strong>Feedback og karaktergivning</strong>, <strong>Meddelelser</strong> eller <strong>Forumindlæg</strong> er valgt.';
$string['refreshdeadlinestasksettingheading'] = 'Opdater deadlines for planlagt opgave';
$string['pld'] = 'PLD';
$string['pluginname'] = 'Snap';
$string['poster'] = 'Forsidebillede';
$string['posterdesc'] = 'Et stort sidehovedbillede til dit websteds forside. Liggende billeder (1200 x 600 pixels) eller større fungerer bedst.';
$string['poweredbyrunby'] = 'Opbygget med <a href="https://{$a->subdomain}.openlms.net/" target="_blank" rel="noopener">Open LMS</a>, et <a href="https://moodle.com/" target="_blank" rel="noopener">Moodle</a>-baseret produkt.<br>Copyright © {$a->year} Open LMS. Alle rettigheder forbeholdes.';
$string['previoussection'] = 'Forrige sektion';
$string['privacy:metadata:theme_snap_course_favorites:courseid'] = 'Kursus-id\'et for det kursus, brugeren har markeret som favorit';
$string['privacy:metadata:theme_snap_course_favorites:userid'] = 'Bruger-id\'et for den bruger, der har markeret kurset om favorit';
$string['privacy:metadata:theme_snap_course_favorites:timefavorited'] = 'Tidsstemplet for, hvornår brugeren markerede kurset som favorit';
$string['privacy:metadata:theme_snap_course_favorites'] = 'Gemmer brugerens kursusfavoritter for Snap';
$string['problemsfound'] = 'Problemer fundet';
$string['progress'] = 'Fremskridt';
$string['readmore'] = 'Læs mere »';
$string['recentactivity'] = 'Seneste aktivitet';
$string['recentfeedback'] = 'Feedback';
$string['region-main'] = 'Primær';
$string['region-side-main-box'] = 'Primær';
$string['region-side-post'] = 'Højre';
$string['region-side-pre'] = 'Venstre';
$string['region-side-top'] = 'Top';
$string['released'] = 'Frigivet: {$a}';
$string['reopened'] = 'Genåbnet';
$string['resourcedisplay'] = 'Ressourcevisning';
$string['resourcedisplayhelp'] = 'Vælg, hvordan vedhæftede filer og links vises i dit kursus. Snap-temaet understøtter ikke multimediefiler i de små aktivitets- og ressourcekorts beskrivelse.';
$string['resumegraphicsanim'] = 'Genoptag GIF-animation.';
$string['displaydescription'] = 'Vis beskrivelse';
$string['displaydescriptionhelp'] = 'Vælg for at vise en beskrivelse af ressourceaktiviteter på en ny side først. Studerende vil få adgang til indhold via beskrivelsen.';
$string['search'] = 'Søg i indhold';
$string['showcoursegradepersonalmenu'] = 'Karakterer';
$string['showcoursegradepersonalmenudesc'] = 'Vis brugere deres karakter i kursuskort i den personlige menu';
$string['socialmedia'] = 'Sociale medier';
$string['submitted'] = 'Sendt';
$string['sitedescription'] = 'Beskrivelse af websted';
$string['subtitle'] = 'Undertitel';
$string['subtitle_desc'] = 'Beskriv kort dit websted for brugere.';
$string['summarylabel'] = 'Sektionsoversigt';
$string['themecolor'] = 'Webstedsfarve';
$string['themecolordesc'] = 'Klare farver fungerer bedst og giver dit websted et moderne udseende.';
$string['title'] = 'Titel';
$string['top'] = 'Top';
$string['topbarbgcolor'] = 'Navigationslinjens farve';
$string['topbarlinkcolor'] = 'Farve på link til og ikon for navigationslinje';
$string['topbarbuttoncolor'] = 'Baggrund til Mine kurser';
$string['togglenavigation'] = 'Slå navigation til/fra';
$string['topicactions'] = 'Emnehandlinger';
$string['xakatwitter'] = '𝕏';
$string['xakatwitterdesc'] = 'URL-adressen til din 𝕏-konto.';
$string['unenrolme'] = 'Frameld mig';
$string['enrolme'] = 'Tilmeld mig';
$string['unread'] = 'ulæst';
$string['unsupportedcoverimagetype'] = 'Ikke-understøttet forsidebilledetype ({$a})!';
$string['via'] = 'via';
$string['viewcourse'] = 'Vis kursus';
$string['viewmore'] = 'Vis mere';
$string['viewyourprofile'] = 'Se din profil';
$string['viewmyfeedback'] = 'Vis min feedback';
$string['viewcalendar'] = 'Vis min kalender';
$string['viewforumposts'] = 'Vis mine forumindlæg';
$string['viewmessaging'] = 'Vis mine meddelelser';
$string['vieworiginalimage'] = 'Vis originalt billede';
$string['visibility'] = 'Synlighed';
$string['xofyanswered'] = '{$a->completed} af {$a->participants} besvaret';
$string['xofyattempted'] = '{$a->completed} af {$a->participants} forsøgt';
$string['xofycontributed'] = '{$a->completed} af {$a->participants} bidraget';
$string['xofysubmitted'] = '{$a->completed} af {$a->participants} indsendt';
$string['xungraded'] = '{$a} ikke bedømt';
$string['youtube'] = 'YouTube';
$string['youtubedesc'] = 'URL-adresse til din YouTube-kanal.';
$string['showallsectionsdisabled'] = 'På grund af dens designsprog er indstillingen "Vis alle sektioner på én side" ikke tilgængelig i Snap.';
$string['disabled'] = 'Deaktiveret';
$string['showappearancedisabled'] = 'Snaps designsprog forhindrer ændringer i indstillinger for "udseende".';
$string['pbb'] = 'Profilbaseret branding';
$string['pbb_description'] = 'Ved at aktivere <strong>Profilbaseret branding</strong> kan du tilpasse brandingoplevelsen for en bestemt brugergruppe baseret på det valgte brugerprofilfelt.<ul><li>Brugerfeltværdien skal gives et "<em>slug-id</em>", alle tegn konverteres til små bogstaver og adskilles med en bindestreg (-)</li>
<li>Strengen <code>snap-pbb-</code> foranstilles</li>
<li>Denne klasse bliver tilføjet HTML-tagget <code>body</code></li></ul>For eksempel vil brugerfeltværdien <em>Blueberry Extravaganza</em> få slug-id <code>snap-pbb-blueberry-extravaganza</code><br /><br />Denne funktion bruges sammen med brugerdefineret CSS. Du skal tilføje CSS-udvælgere ved hjælp af de nye klasser i sektionen <a class="snap-settings-tab-link" href="#themesnapbranding">Basis</a>.';
$string['pbb_enable'] = 'Aktivér profilbaseret branding';
$string['pbb_enable_description'] = 'Tilføjer kun klassen til tagget for brødtekst, hvis det er aktivt.';
$string['pbb_field'] = 'Brugerfelt, der skal bruges';
$string['pbb_field_description'] = 'Feltets værdi vil få et slug-id og blive brugt som et CSS-klassenavn med <code>snap-pbb-</code> foranstillet.';
$string['cachedef_profile_based_branding'] = 'Cachelagring for profilbaseret branding.';
$string['cachedef_course_card_bg_image'] = 'Cachelagring for kursets baggrundsbillede.';
$string['cachedef_course_card_teacher_avatar'] = 'Cachelagring for underviseravatarer.';
$string['cachedef_course_card_teacher_avatar_index'] = 'Cachelagring for indeks for underviseravatarer';
$string['accessforumstringdis'] = 'Indstillinger for visning';
$string['accessforumstringmov'] = 'Flyt indstillinger';
$string['accesscalendarstring'] = 'Kalender';
$string['accessglobalsearchstring'] = 'Søgning';
$string['admineventwarning'] = 'For at se begivenheder fra alle kurser,';
$string['gotocalendarsnap'] = 'skal du gå til webstedets kalender.';
$string['quizattemptswarn'] = 'Udelader forsøg fra suspenderede brugere';
$string['quizfeedback'] = 'Feedback';
$string['validratio'] = 'Denne kombination af farver overholder ikke , for WCAG 2.0-minimumsratioen, 4.5:1';
$string['invalidratio'] = 'Denne farvekombination er ikke i overensstemmelse med <a href="https://www.w3.org/TR/WCAG20-TECHS/G18.html" target="_blank">WCAG 2.0 min. forholdsværdi 4.5:1</a>. Værdi: "{$a}"';
$string['imageinvalidratio'] = 'Dette billede kan have kontrastproblemer, da det ikke overholder WCAG 2.0-minimumsratioen, 4.5:1. Gennemsnitlig pixelværdi: "{$a}"';
$string['catinvalidratio'] = 'Følgende farvekategorier er ikke i overensstemmelse med <a href="https://www.w3.org/TR/WCAG20-TECHS/G18.html" target="_blank">WCAG 2.0 min. forholdsværdi 4.5:1</a>:
I forhold til webstedets baggrundsfarve (hvid): "{$a->white}". I forhold til navigationsbjælkens baggrundsfarve: "{$a->custombar}". I forhold til baggrundsfarven for Mine kurser-knappen: "{$a->customnav}"';
$string['spotinvalidratio'] = 'Baggrundsfarven er ikke i overensstemmelse med <a href="https://www.w3.org/TR/WCAG20-TECHS/G18.html" target="_blank">WCAG 2.0 min. forholdsværdi 4.5:1</a>. Aktuel værdi i forhold til {$a->name}: {$a->value}.';
$string['imageinvalidratiocategory'] = 'Dette billede kan have kontrastproblemer med temafarven, da det ikke overholder WCAG 2.0-minimumsratioen, 4.5:1. Gennemsnitlig pixelværdi: "{$a}"';
$string['lazyload_mod_page'] = 'Aktivér udskudt indlæsning som standard for sidens resourcer';
$string['lazyload_mod_page_description'] = 'Hvis denne indstilling er aktiveret, vil den kraftigt reducere indlæsningstiden for kurser med mange sider.';
$string['pmadvancedfeed_viewmore'] = 'Vis mere';
$string['pmadvancedfeed_reload'] = 'Opdater';
$string['multimediacard'] = 'Multimediefiler vil ikke blive vist i aktivitetskortvisninger for Snap-temaet. Dette vil kun være gældende på hjemmesiden og kursussiden for små aktivitets- og ressourcekort.';
$string['enabledlogin'] = 'Viste login-muligheder';
$string['enabledlogindesc'] = 'Vælg de login-muligheder, der bør blive vist.';
$string['moodlelogin'] = 'Vis kun Moodle-login';
$string['alternativelogin'] = 'Vis kun alternative login-muligheder';
$string['bothlogin'] = 'Vis begge login-muligheder';
$string['enabledloginorder'] = 'Rækkefølge login-muligheder';
$string['enabledloginorderdesc'] = 'Vælg hvilken login-mulighed skal vises først.';
$string['moodleloginfirst'] = 'Vis Moodle-login først';
$string['alternativeloginfirst'] = 'Vis alternative login-muligheder først';
$string['alternativeloginoptions'] = 'Alternative login-muligheder';
$string['openmessagedrawer'] = 'Åbn meddelelsesskuffe.';
$string['refreshdeadlinestask'] = 'Genindlæs cachelagrede deadlinedata. Dette bør køres, før alle brugere logger ind.';
$string['resetdeadlinesquerycounttask'] = 'Nulstil tidsfrister, forespørgselstæller';
$string['refreshdeadlinestaskoff'] = 'Søgte ikke efter data til udfyldning. Slå indstillingen "Refresh deadlines using scheduled task" (Opdater tidsfrister med planlagt opgave) i de personlige menuindstillinger i Snap, så denne opgave kan udfylde cachelagrede deadlinedata.';
$string['activityrestriction'] = 'Aktivitetsbegrænsning';
$string['hideandshowactioncb'] = 'Handling for afkrydsningsfelt til at skjule og vise aktiviteter';
$string['retryfeed'] = 'Dette feed er ikke tilgængeligt i øjeblikket - prøv senere. Feed: {$a}';
$string['loadingfeed'] = 'Indlæser... kan tage noget tid';
$string['hvpcustomcss'] = 'H5P Brugerdefineret CSS';
$string['hvpcustomcssdesc'] = 'Brugerdefineret CSS til H5P-modulet (moodle.org/plugins/mod_hvp), hvis det er installeret.';
$string['courselimitstrdanger'] = 'Statuslinjen for opnået kursusgrænse vises ikke.';
$string['courselimitstrwarning'] = 'Hvis der er angivet mere end {$a} kurser, vises statuslinjen ikke';
$string['tilesformatcoursehomealttext'] = 'Startside for kursus';
$string['editmodetiles'] = 'Redigér indhold';
$string['totop'] = 'Gå til toppen';
$string['loginsetting'] = 'Loginside';
$string['loginbgimgheading'] = 'Skabelon til loginside';
$string['loginbgimgheadingdesc'] = 'Snap gør det muligt at skifte mellem forskellige skabeloner, der skal vises på loginsiden. Vælg venligst mellem forskellige valgmuligheder i rullemenuen nedenfor.';
$string['loginpagetemplate'] = 'Vælg den loginsideskabelon, der skal bruges';
$string['classic_template'] = 'Klassisk skabelon';
$string['loginbgimg'] = 'Baggrundsbillede for login';
$string['loginbgimgdesc'] = 'Vælg de billeder, der skal vises i baggrunden på loginsiden. For at få det bedste resultat med de viste billeder skal du venligst uploade filer med et billedformat på 16:9 (opløsning på 720p eller dimensioner på 1280x720 pixel). Uploadede billeder skal have de samme dimensioner for at opnå en korrekt visualisering.';
$string['stylish_template'] = 'Stilfuld skabelon';
$string['activityedit'] = 'Rediger aktivitet';
$string['snapfeedsblocktitle'] = 'Snap-feeds';
$string['tiktok'] = 'TikTok';
$string['tiktokdesc'] = 'URL-adressen til din TikTok-konto.';
$string['snapfootersettings'] = 'Snap-sidefod';
$string['snapfootercustomization'] = 'Tilpasning af sidefod';
$string['snapfootercustomizationdesc'] = 'Snap gør det muligt at tilpasse temaets sidefod, som vises på hele webstedet. Gør brugeroplevelsen bedre ved at tilføje nyttige links, supportressourcer eller andre værdifulde oplysninger om din organisation, som du gerne vil dele med studerende og undervisere.';
$string['snapfootercolors'] = 'Farve i webstedets sidefod';
$string['snapfootercolorsdesc'] = 'Farverne i sidefoden kan ændres: Hvis du vil ændre baggrundsfarven og/eller tekstfarven, skal du markere dem i følgende farvevælgere.';
$string['snapfooterbgcolor'] = 'Baggrundsfarve i sidefod';
$string['snapfootertxtcolor'] = 'Tekstfarve i sidefod';
$string['enableblockmyoverviewwarning'] = 'Blokken Kursusoversigt er deaktiveret. For at få vist kurserne skal du aktivere blokken.';
$string['collapseicon'] = 'Skjul indholdet af';
$string['expandicon'] = 'Udvid indholdet af';
