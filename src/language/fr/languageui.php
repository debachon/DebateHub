<?php
/********************************************************************************
 *                                                                              *
 *  (c) Copyright 2015 The Open University UK                                   *
 *                                                                              *
 *  This software is freely distributed in accordance with                      *
 *  the GNU Lesser General Public (LGPL) license, version 3 or later            *
 *  as published by the Free Software Foundation.                               *
 *  For details see LGPL: http://www.fsf.org/licensing/licenses/lgpl.html       *
 *               and GPL: http://www.fsf.org/licensing/licenses/gpl-3.0.html    *
 *                                                                              *
 *  This software is provided by the copyright holders and contributors "as is" *
 *  and any express or implied warranties, including, but not limited to, the   *
 *  implied warranties of merchantability and fitness for a particular purpose  *
 *  are disclaimed. In no event shall the copyright owner or contributors be    *
 *  liable for any direct, indirect, incidental, special, exemplary, or         *
 *  consequential damages (including, but not limited to, procurement of        *
 *  substitute goods or services; loss of use, data, or profits; or business    *
 *  interruption) however caused and on any theory of liability, whether in     *
 *  contract, strict liability, or tort (including negligence or otherwise)     *
 *  arising in any way out of the use of this software, even if advised of the  *
 *  possibility of such damage.                                                 *
 *                                                                              *
 ********************************************************************************/
/**
 * languageui.php
 *
 * Michelle Bachler (KMi)
 *
 * This should eventually be broken up into separate files and become part of the internationalization of the Debate Hub
 */

/** HEADERS **/
$LNG->HEADER_LOGO_HINT = 'Go to the '.$CFG->SITE_TITLE.' page d'acceuil';
$LNG->HEADER_LOGO_ALT = $CFG->SITE_TITLE.' Logo';
$LNG->HEADER_HOME_ICON_HINT = 'Revenir à la page d'acceuil';
$LNG->HEADER_HOME_ICON_ALT = 'Icone acceuil';
$LNG->HEADER_RSS_FEED_ICON_HINT = 'Prendre un flux RSS pour '.$CFG->SITE_TITLE.'. Note: each '.$LNG->ISSUE_NAME.' a aussi son propre flux.';
$LNG->HEADER_RSS_FEED_ICON_ALT = 'Icone RSS';
$LNG->HEADER_USER_HOME_LINK_HINT = 'Aller à votre page d'acceuil';
$LNG->HEADER_EDIT_PROFILE_LINK_TEXT = 'Editer votre profil';
$LNG->HEADER_EDIT_PROFILE_LINK_HINT = 'Edit les informations de votre profil';
$LNG->HEADER_SIGN_OUT_LINK_TEXT = 'Déconnexion';
$LNG->HEADER_SIGN_OUT_LINK_HINT = 'Déconnexion';
$LNG->HEADER_SIGN_IN_LINK_TEXT = 'Connexion';
$LNG->HEADER_SIGN_IN_LINK_HINT = 'Connexion';
$LNG->HEADER_SIGNUP_OPEN_LINK_TEXT = 'S'enregistrer';
$LNG->HEADER_SIGNUP_OPEN_LINK_HINT = 'S'enregistrer instantanément pour se connextion et ajouter des informations';
$LNG->HEADER_SIGNUP_REQUEST_LINK_TEXT = 'S'enregistrer';
$LNG->HEADER_SIGNUP_REQUEST_LINK_HINT = 'Demander un compte pour s'inscrire et ajouter des données';
$LNG->HEADER_HELP_PAGE_LINK_TEXT = 'Aide';
$LNG->HEADER_HELP_PAGE_LINK_HINT = 'Aller à la page d'aide';
$LNG->HEADER_ABOUT_PAGE_LINK_TEXT = 'À propos';
$LNG->HEADER_ABOUT_PAGE_LINK_HINT = 'Aller à la page à propos';
$LNG->HEADER_ADMIN_PAGE_LINK_TEXT = 'Administrateur';
$LNG->HEADER_ADMIN_PAGE_LINK_HINT = 'Aller à la page administrateur';
$LNG->HEADER_MY_HUB_LINK = 'Mon Hub';

$LNG->HEADER_SEARCH_RUN_ICON_HINT = 'Faire une recherche';
$LNG->HEADER_SEARCH_RUN_ICON_ALT = 'Démarrer';

$LNG->HEADER_SEARCH_INFO_HINT = "<div  style='padding:10px;'>The default search will separate words using the spaces and perform an OR search, e.g. <b>'school system'</b> will search for the words <b>'school' OR 'system'</b> in either the item title, item description or any associated web clip texts.";
$LNG->HEADER_SEARCH_INFO_HINT .= "<br><br>Use a '+' between words is you wish to perform an AND search, e.g. <b>'school+system'</b> will search for both the words <b>'school' and 'system'</b> somewhere in either the item title, item description or any associated web clip texts.";
$LNG->HEADER_SEARCH_INFO_HINT .= "<br><br>Use double quotes around the search string to perform a phrase search, e.g. <b>\"school system\"</b> will search for the <b>exact phrase 'school system'</b> in either the item title, item description or any associated web clip texts.</div>";

/** FOOTER **/
$LNG->FOOTER_TERMS_LINK = 'Termes et conditions d'utilisation';
$LNG->FOOTER_PRIVACY_LINK = 'Confidentialité';
$LNG->FOOTER_CONTACT_LINK = 'Contact';

/** REPORT FOOTER **/
$LNG->FOOTER_REPORT_PRINTED_ON = 'Rapport imprimé:';

$LNG->HOME_MOST_RECENT_GROUPS_TITLE = 'Nouveau '.$LNG->GROUPS_NAME;
$LNG->HOME_MOST_RECENT_DEBATES_TITLE = 'Noubeau '.$LNG->DEBATES_NAME;
$LNG->HOME_MY_GROUPS_TITLE = 'Mon '.$LNG->GROUPS_NAME;
$LNG->HOME_MY_GROUPS_AREA_LINK = 'Voir mon '.$LNG->GROUPS_NAME.' area';
$LNG->HOME_MY_DEBATES_TITLE = 'Mon '.$LNG->DEBATES_NAME;
$LNG->HOME_MY_DEBATES_AREA_LINK = 'Voir mon '.$LNG->DEBATES_NAME.' espace';

/** HOME PAGE **/
$LNG->HOMEPAGE_VIEW_ALL = "Voir tout";
$LNG->HOMEPAGE_NEWS_TITLE = "Actualités récentes";

$LNG->DEBATE_CREATE_LOGGED_OUT_OPEN = "pour créer un nouveau ".$LNG->DEBATE_NAME;
$LNG->DEBATE_CREATE_LOGGED_OUT_REQUEST = "pour créer un nouveau ".$LNG->DEBATE_NAME;
$LNG->DEBATE_CREATE_LOGGED_OUT_CLOSED = "pour créer un nouveau ".$LNG->DEBATE_NAME;

$LNG->SOLUTION_CREATE_LOGGED_OUT_OPEN = "pour contribuer à ".$LNG->DEBATE_NAME;
$LNG->SOLUTION_CREATE_LOGGED_OUT_REQUEST = "pour contribuer à: ".$LNG->DEBATE_NAME;
$LNG->SOLUTION_CREATE_LOGGED_OUT_CLOSED = pour contribuer à: ".$LNG->DEBATE_NAME;

/** GROUPS **/
$LNG->FORM_BUTTON_DELETE_GROUP = 'Supprimer '.$LNG->GROUP_NAME;
$LNG->FORM_BUTTON_JOIN_GROUP = 'Rejoindre '.$LNG->GROUP_NAME;
$LNG->FORM_BUTTON_JOIN_GROUP_CLOSED = 'Demander à rejoindre '.$LNG->GROUP_NAME;

$LNG->ERROR_GROUP_NOT_FOUND_MESSAGE = "Le groupe demandé n'a pu être trouvé";
$LNG->ERROR_GROUP_USER_LAST_ADMIN = "Vous ne pouvez enlever à l'utilisateur son statut d'administrateur, car le groupe n'aurait plus d'administrateur";
$LNG->ERROR_GROUP_EXISTS_MESSAGE = "Un groupe avec ce nom existe déjà" ;
$LNG->ERROR_GROUP_USER_NOT_MEMBER = "Cet utilisateur n'est pas un membre du groupe demandé.";

$LNG->GROUP_CREATE_TITLE = 'Créer nouveau '.$LNG->GROUP_NAME;
$LNG->GROUP_MANAGE_TITLE = 'Gérer '.$LNG->GROUPS_NAME;
$LNG->GROUP_MANAGE_SINGLE_TITLE = 'Gérer '.$LNG->GROUP_NAME;

$LNG->GROUP_CREATE_LOGGED_OUT_OPEN = "pour créer un nouveau ".$LNG->GROUP_NAME;
$LNG->GROUP_CREATE_LOGGED_OUT_REQUEST = "pour créer un nouveau ".$LNG->GROUP_NAME;
$LNG->GROUP_CREATE_LOGGED_OUT_CLOSED = "pour créer un nouveau ".$LNG->GROUP_NAME;

$LNG->GROUP_JOIN_GROUP = " pour créer un nouveau ".$LNG->ISSUE_NAME;

$LNG->ISSUE_PHOTO_FORM_HINT = "(optional) - créez une image pour le représenter ".$LNG->DEBATE_NAME;

$LNG->GROUP_PHOTO_FORM_HINT = "(optional) - créez une image pour le représenter ".$LNG->GROUP_NAME;
$LNG->GROUP_NAME_FORM_HINT = "(compulsory) - Son nom ".$LNG->GROUP_NAME;
$LNG->GROUP_DESC_FORM_HINT = "(optional) - Une description de son objectif ".$LNG->GROUP_NAME;
$LNG->GROUP_WEBSITE_FORM_HINT = "(optionnel) — Ajouter un site web associé ".$LNG->GROUP_NAME;

$LNG->GROUP_FORM_NAME = "Nom:";
$LNG->GROUP_FORM_DESC = "Description:";
$LNG->GROUP_FORM_WEBSITE = "Site web:";
$LNG->GROUP_FORM_MEMBERS_CURRENT = "Membres actuels:";

$LNG->GROUP_FORM_SELECT = "Sélectionner un(e) ".$LNG->GROUP_NAME;
$LNG->GROUP_FORM_NO_MEMBERS = 'Cela '.$LNG->GROUP_NAME.' n'a pas de membres.';
$LNG->GROUP_FORM_NO_PENDING = 'Ce '.$LNG->GROUP_NAME.' n'a pas de requêtes de membres.';
$LNG->GROUP_FORM_MEMBERS_PENDING = "Requête:";
$LNG->GROUP_FORM_NAME_LABEL = "Nom";
$LNG->GROUP_FORM_DESC_LABEL = "Description";
$LNG->GROUP_FORM_ISADMIN_LABEL = "Administrateur";
$LNG->GROUP_FORM_REMOVE_LABEL = "Supprimer";
$LNG->GROUP_FORM_APPROVE_LABEL = "Approuver";
$LNG->GROUP_FORM_REJECT_LABEL = "Rejeter";
$LNG->GROUP_FORM_REMOVE_MESSAGE_PART1 = 'Êtes vous sûr de supprimer? ';
$LNG->GROUP_FORM_REMOVE_MESSAGE_PART2 = 'de ca '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_FORM_REJECT_MESSAGE_PART1 = 'Êtes vous sûr de vouloir rejeter';
$LNG->GROUP_FORM_REJECT_MESSAGE_PART2 = 'comme un membre de '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_FORM_APPROVE_MESSAGE_PART1 = 'Êtes vous sure d'approuver';
$LNG->GROUP_FORM_APPROVE_MESSAGE_PART2 = 'Pour être un membre de '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_FORM_IS_JOINING_OPEN_LABEL = 'Est '.$LNG->GROUP_NAME.' joining open?';
$LNG->GROUP_FORM_IS_JOINING_OPEN_HELP = 'Sélectionner la case si vous voulez que les utilisateurs décident de rejoindre leur groupe par eux même.' <br> Ne pas sélectionner la case si vous souhaitez modérer les demandes de joindre le groupe et ainsi controler qui peur rejoindre le groupe.';

$LNG->GROUP_JOIN_REQUEST_MESSAGE = 'Votre requête pour joindre cet(te) '.$LNG->GROUP_NAME.' a été enregistré et est en attente d'approbation. Vous recevrez un email quand votre requête aura été traitée.<br><br>Merci pour votre intérêt '.$LNG->GROUP_NAME;
$LNG->GROUP_JOIN_PENDING_MESSAGE = 'Adhésion en cours de traitement';
$LNG->GROUP_MY_ADMIN_GROUPS_TITLE = $LNG->GROUPS_NAME.' J'administre:';
$LNG->GROUP_MY_MEMBER_GROUPS_TITLE = $LNG->GROUPS_NAME.' Je suis un membre de:';

$LNG->GROUP_FORM_SELECT = "Sélectionner un(e) ".$LNG->GROUP_NAME;
$LNG->GROUP_FORM_NO_MEMBERS = 'Ceci '.$LNG->GROUP_NAME.' n'a pas de membres.';
$LNG->GROUP_FORM_NO_PENDING = 'Ceci '.$LNG->GROUP_NAME.' n'a pas de requêtes de membre à traiter.';
$LNG->GROUP_FORM_MEMBERS_PENDING = "Requêtes de membres pour rejoindre:";
$LNG->GROUP_FORM_NAME_LABEL = "Nom";
$LNG->GROUP_FORM_DESC_LABEL = "Description";
$LNG->GROUP_FORM_ISADMIN_LABEL = "Administrateur";
$LNG->GROUP_FORM_REMOVE_LABEL = "Supprimer";
$LNG->GROUP_FORM_APPROVE_LABEL = "Approuver";
$LNG->GROUP_FORM_REJECT_LABEL = "Rejeter";
$LNG->GROUP_FORM_REMOVE_MESSAGE_PART1 = 'Êtes vous sûr de vouloir supprimer';
$LNG->GROUP_FORM_REMOVE_MESSAGE_PART2 = 'de ceci '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_FORM_REJECT_MESSAGE_PART1 = 'êtes';
$LNG->GROUP_FORM_REJECT_MESSAGE_PART2 = 'as a member of this '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_FORM_APPROVE_MESSAGE_PART1 = 'Êtes vous sûr(e) de vouloir approuver';
$LNG->GROUP_FORM_APPROVE_MESSAGE_PART2 = 'pour être un membre de ceci '.$LNG->GROUP_NAME.'?';
$LNG->GROUP_JOIN_REQUEST_MESSAGE = 'Votre demande pour rejoidre ceci '.$LNG->GROUP_NAME.' a été enregistré et attend d'être approuvé.<br><br> Merci de votre intérêt dans'.$LNG->GROUP_NAME;
$LNG->GROUP_JOIN_PENDING_MESSAGE = 'Adhésion en attente';

$LNG->GROUP_FORM_MEMBERS = "Ajouter Membre:<br/>(comma separated)";
$LNG->GROUP_FORM_MEMBERS_HELP = "Entrez l'adresse email de tous les utilisateurs que vous souhaitez qu'ils rejoignent ".$LNG->GROUP_NAME.", Un email va être envoyé à toutes ces personnes pour les notifier des adhésions de groupe et tous autres utilisateurs qui n'ont pas déjà un compte seront invités à rejoindre.";
$LNG->GROUP_FORM_NAME_ERROR = 'Vous devez entrer un nom pour '.$LNG->GROUP_NAME;
$LNG->GROUP_FORM_NOT_GROUP_ADMIN = 'Vous n'êtes pas un administrateur pour ceci '.$LNG->GROUP_NAME;
$LNG->GROUP_FORM_NOT_GROUP_ADMIN_ANY = 'Vous n'êtes administrateur pour aucun'.$LNG->GROUPS_NAME;
$LNG->GROUP_FORM_LOCATION = 'Localisation: (ville)';
$LNG->GROUP_FORM_PHOTO = 'Photo';
$LNG->GROUP_FORM_PHOTO_HELP = '(taille minimum 150px w x 100px h. Les images plus large vont être redimensionnées/recoupées à cette taille)';

$LNG->GROUP_FORM_IS_MEMBER = "est titulaire d'un compte et a été ajouté à ".$LNG->GROUP_NAME.".";
$LNG->GROUP_FORM_NOT_MEMBER = "n'est pas titulaire d'un compte et a été invité à rejoindre.";

$LNG->GROUP_BLOCK_STATS_PEOPLE = 'Membres:';
$LNG->GROUP_BLOCK_STATS_ISSUES = $LNG->ISSUES_NAME.':';
$LNG->GROUP_BLOCK_STATS_VOTES = $LNG->VOTES_NAME.':';

$LNG->DEBATE_BLOCK_STATS_VIEWS = 'Vues:';
$LNG->DEBATE_BLOCK_STATS_PEOPLE = 'Participants:';
$LNG->DEBATE_BLOCK_STATS_ISSUES = $LNG->SOLUTIONS_NAME.':';
$LNG->DEBATE_BLOCK_STATS_ISSUES_ALL = 'All '.$LNG->SOLUTIONS_NAME.':';
$LNG->DEBATE_BLOCK_STATS_ISSUES_REMAINING = 'Restant '.$LNG->SOLUTIONS_NAME.':';
$LNG->DEBATE_BLOCK_STATS_VOTES = $LNG->VOTES_NAME.':';

$LNG->DEBATE_BLOCK_STATS_LINK_HINT = "Cliquer pour aller sur un tableau de bord d'analyses et de visualisatin sur ".$LNG->ISSUE_NAME.".";

$LNG->GROUP_MEMBERS_LABEL = "Membres du groupe";

$LNG->GROUP_DEBATE_CREATE_BUTTON = 'Créer nouveau '.$LNG->DEBATE_NAME;

/** END GROUP **/

$LNG->DEBATE_CONTRIBUTE_LINK_TEXT = "Contribuer";
$LNG->DEBATE_CONTRIBUTE_LINK_HINT = "Contributer un(e) ".$LNG->ARGUMENT_NAME." à ceci ".$LNG->SOLUTION_NAME;

$LNG->ALERT_NO_RESULTS = 'Il n'y a pas d'alertes';
$LNG->ALERT_CLICK_HIGHLIGHT = 'Cliquer pour surligner dans '.$LNG->ISSUE_NAME;
$LNG->ALERT_SHOW_ALL = 'montrer tout...';
$LNG->ALERT_SHOW_LESS = 'montrer moins...';

$LNG->FORM_IDEA_NEW_TITLE = "Ajoutez votre ".$LNG->SOLUTION_NAME;
$LNG->FORM_IDEA_LABEL_TITLE = $LNG->SOLUTION_NAME." Titre...";
$LNG->FORM_IDEA_LABEL_DESC = $LNG->SOLUTION_NAME." Description...";

$LNG->FORM_IDEA_MERGE_TITLE = "Fusion sélectionnée ".$LNG->SOLUTIONS_NAME;
$LNG->FORM_IDEA_MERGE_LABEL_TITLE = "Fusionné ".$LNG->SOLUTIONS_NAME." Titre...";
$LNG->FORM_IDEA_MERGE_LABEL_DESC = "Fusionné ".$LNG->SOLUTIONS_NAME." Description...";
$LNG->FORM_IDEA_MERGE_HINT = "Créer une nouvelle Idée représentant les Idées sélectionnées. Connecter tous commentaires et arguments dans les idées sélectionnées à cette nouvelle Idée. Ensuite retire les idées sélectionnées. ";
$LNG->FORM_IDEA_MERGE_MUST_SELECT = 'Vous devez d'abord retirer au moins 2 ideas pour fusionner. ';
$LNG->FORM_IDEA_MERGE_NO_TITLE = "Vous devez entrer un titre pour le nouveau fusionné ".$LNG->SOLUTION_NAME;

$LNG->FORM_SOLUTION_ENTER_SUMMARY_ERROR = 'Entrez un(e) '.$LNG->SOLUTION_NAME.' avant d'essayer de fusionner';

$LNG->FORM_BUTTON_SUBMIT = 'Soumettre';
$LNG->FORM_BUTTON_SAVE = 'Enregistrer;
$LNG->FORM_BUTTON_SPLIT = 'Diviser';
$LNG->FORM_BUTTON_SPLIT_HINT = 'Diviser ceci '.$LNG->SOLUTION_NAME.' en deux ou plus '.$LNG->SOLUTIONS_NAME;

$LNG->FORM_REMOVE_MULTI = "êtes vous sûr que vous souhaitez supprimer cet item? Cette action ne peut être annulée!";
$LNG->FORM_SPLIT_IDEA_ERROR = "Vous devez entrer un titre pour les deux premières idées";

$LNG->NODE_ADDED_BY = 'Ajouté par:';
$LNG->NODE_CHILDREN_EVIDENCE_PRO = 'Pour';
$LNG->NODE_CHILDREN_EVIDENCE_CON = 'Contre';
$LNG->FORM_PRO_ENTER_SUMMARY_ERROR = 'Entrez un titre pour votre '.$LNG->PRO_NAME.' avant d'essayer de soumettre';
$LNG->FORM_CON_ENTER_SUMMARY_ERROR = 'Entrez un titre pour votre '.$LNG->CON_NAME.' avant d'essayer de soumettre';

$LNG->FORM_PRO_LABEL_TITLE = $LNG->PRO_NAME." Titre...";
$LNG->FORM_PRO_LABEL_DESC = $LNG->PRO_NAME." Description...";
$LNG->FORM_CON_LABEL_TITLE = $LNG->CON_NAME." Titre...";
$LNG->FORM_CON_LABEL_DESC = $LNG->CON_NAME." Description...";
$LNG->FORM_LINK_LABEL = "Paste ".$LNG->RESOURCE_NAME."...";
$LNG->FORM_MORE_LINKS_BUTTONS = "Ajouter un autre ".$LNG->RESOURCE_NAME;
$LNG->FORM_DELETE_LINKS_BUTTONS = "Supprimer";
$LNG->FORM_LINK_INVALID_PART1 = "L'url: ";
$LNG->FORM_LINK_INVALID_PART2 = ", n'est pas un url valide. Vérifier qu'il commence avec htt:// ou un autre protocole web valide.";
$LNG->EXPLORE_EDITING_ARGUMENT_TITLE = "Edition";

$LNG->STATS_PRO_HINT_TEXT = "soutien";
$LNG->STATS_CON_HINT_TEXT = "opposition";

$LNG->DEBATE_IMAGE_LABEL = $LNG->DEBATE_NAME.' photo:';
$LNG->ISSUE_IMAGE_LABEL = $LNG->ISSUE_NAME.' Image:';
$LNG->BUILTFROM_DIALOG_TITLE=" a été construit à partir de:";
$LNG->DEBATE_MODE_BUTTON_ORGANIZE = 'Modérer';
$LNG->PAGE_BUTTON_SHARE = 'Partager';
$LNG->PAGE_BUTTON_DASHBOARD = 'tableau de contrôle';
$LNG->DEBATE_MODERATOR_SECTION_TITLE = 'Moderateurs';

/** DEBATE PHASING **/
$LNG->ISSUE_PHASE_CURRENT = 'Phase actuelle';

$LNG->ISSUE_PHASE_START = 'Commencer';
$LNG->ISSUE_PHASE_DISCUSS = 'Discuter';
$LNG->ISSUE_PHASE_REDUCE = 'Réduire';
$LNG->ISSUE_PHASE_DECIDE= 'Décider';
$LNG->ISSUE_PHASE_END = 'Terminer';

$LNG->ISSUE_PHASE_DISCUSS_HELP = 'Cette phase est conçue pour discuter de l'actuel '.$LNG->ISSUE_NAME.'. Ajouter '.$LNG->SOLUTIONS_NAME.', '.$LNG->PROS_NAME.' and '.$LNG->CONS_NAME.' en utilisant les questionnaires ci dessous . Cliquez le'.$LNG->ARGUMENTS_NAME.' Lier à '.$LNG->SOLUTIONS_NAME.' pour ajouter/voir '.$LNG->ARGUMENTS_NAME.'.';
$LNG->ISSUE_PHASE_REDUCE_HELP = 'Cette phase est concue pour réduire la liste des idées. Déplacez les citrons du panier vers les idées que vous aimez le moins. Vous pouvez déplacer 10 citrons, et vous pouvez allouer plus d'un citron à une même idée.';

$LNG->ISSUE_PHASE_DECIDE_HELP = 'Cette phase est concue pour prendre une décision finale concernant les idées les plus populaires. Vous avez un vote pour ou contre possible sur chaque idée mais vous ne pouvez voter sur vos propres idées.';

$LNG->ISSUE_OPEN_TITLE = 'Continu '.$LNG->DEBATE_NAME.'&nbsp;&nbsp; (default)';
$LNG->ISSUE_OPEN_HELP = 'Par défaut, '.$LNG->DEBATES_NAME.' sont toujours ouvert aux discussions, contributions et les votes sont toujours ouvert.';

$LNG->ISSUE_TIMING_TITLE = 'Temps limité '.$LNG->DEBATE_NAME.'&nbsp;&nbsp; (optional)';
$LNG->ISSUE_TIMING_HELP = 'Ici vous pouvez optionnellement définir la date à laquelle '.$LNG->DEBATE_NAME.' commence et fini.<br>Par défaut, discussion, contributions et vote sera toujours accessible, à moins que vous choisssiez de to <b>Phase</b> le débat ci-dessous.';
$LNG->ISSUE_PHASING_TITLE = 'temps limité '.$LNG->DEBATE_NAME.' avec la phase&nbsp;&nbsp; (optional)';
$LNG->ISSUE_PHASING_HELP = 'Ici vous pouvez optionnellement phaser une limite '.$LNG->DEBATE_NAME.'. Il y a toujours une phase obligatoire de discussion où '.$LNG->SOLUTIONS_NAME.', '.$LNG->PROS_NAME.' et '.$LNG->CONS_NAME.' sont ajoutés à '.$LNG->DEBATE_NAME.'. Il y a ensuite deux phases optionnelles. La phase \'Réduire\' permet aux utilisateurs d'allouer des citrons aux '.$LNG->SOLUTIONS_NAME.' dont ils s'intéressent le moins. Ces votes en citron sont ensuite utilisés pour réduire la liste de '.$LNG->SOLUTIONS_NAME.'. La phase \'Décider\' permet d'ouvrir les votes pour ou contre la liste finale '.$LNG->SOLUTIONS_NAME.'.';
$LNG->ISSUE_PHASING_ON = 'Phaser ceci '.$LNG->DEBATE_NAME.'?';

$LNG->FORM_ISSUE_START_END_DATE_ERROR = "La date de début doit précéder la date de fin";
$LNG->FORM_LABEL_DEBATE_DATES_HINT = "(optionel) - Les dates ".$LNG->DEBATE_NAME." doivent être ouvertes à de nouvelles contributions. Formats de dates possible e.g.: \'14 May 2008\' or \'14-05-2008\'";
$LNG->FORM_LABEL_DEBATE_DATES_TITLE = "Dates du débat dans son ensemble";
$LNG->FORM_LABEL_DEBATE_START_DATE = $LNG->DEBATE_NAME." début le:";
$LNG->FORM_LABEL_DEBATE_END_DATE = "finit le:";

$LNG->FORM_ISSUE_DISCUSSION_START_DATE_ERROR = "La date de début de discussion doit être fixée avant la date de la fin de discussion et aussi entre le ".$LNG->DEBATE_NAME." Dates de début et de fin, et avant les dates de citronage et de vote, si celles-ci sont définis.";
$LNG->FORM_ISSUE_DISCUSSION_END_DATE_ERROR = "La date de fin de discussion doit être plus tardive qu'après la ".$LNG->DEBATE_NAME." date de départ et moins ou égal à ".$LNG->DEBATE_NAME." la date de fin, et donc avant les dates de citronage et de vote, si ces dernières sont définies.";
$LNG->FORM_LABEL_DISCUSSION_DATES_HINT = "La date avant laquelle le ".$LNG->DEBATE_NAME." doit être ouver à un nouveau ".$LNG->SOLUTIONS_NAME." et ".$LNG->ARGUMENTS_NAME.". Les formats de date permis e.g.: \'14 May 2008\' ou \'14-05-2008\'";
$LNG->FORM_LABEL_DISCUSSION_DATES_TITLE = "Phase de discussion";
$LNG->FORM_LABEL_DISCUSSION_START_DATE = "La discussion commence quand ".$LNG->DEBATE_NAME." commence";
$LNG->FORM_LABEL_DISCUSSION_END_DATE = "La discussion se termine:";

$LNG->FORM_ISSUE_LEMONING_START_DATE_ERROR = "La date de début du citronage doit être entre le ".$LNG->DEBATE_NAME." Les dates de début et de fin, après les dates de discussion, et avant la date de départ du vote, si celles-ci sont définies.";
$LNG->FORM_ISSUE_LEMONING_END_DATE_ERROR = "La date de fin du critronage doit être définie après la date de départ du citronage et entre le
 ".$LNG->DEBATE_NAME." Les dates de départ et de fin, après les dates de discussion, et avant la date du vote, si celles-ci sont définies. ";
$LNG->FORM_LABEL_LEMONING_DATES_HINT = "(optionel) - Les dates de début et de fin ".$LNG->SOLUTION_NAME." de citronage devrait être disponibles. Formats autorisés e.g.: \'14 May 2008\' or \'14-05-2008\'";
$LNG->FORM_LABEL_LEMONING_DATES_TITLE = "Réduit la liste d'idées avec le citronage";
$LNG->FORM_LABEL_LEMONING_START_DATE = "La réduction d'idées commence le:";
$LNG->FORM_LABEL_LEMONING_END_DATE = "se termine le:";
$LNG->LEMONING_COUNT_LEFT = 'Citrons restant:';
$LNG->LEMONING_CURRENT_CONUNT_LABEL = 'Votes de citrons';
$LNG->LEMONING_COUNT_FINISHED = 'Désolé, vous n'avez plus de citron!';

$LNG->FORM_ISSUE_VOTE_START_DATE_ERROR = "La date de début de vote doit se situer entre le ".$LNG->DEBATE_NAME." Les dates de début et de fin, après les dates de discussion, et après les dates de citronage, si celles-ci sont définies.";
$LNG->FORM_ISSUE_VOTE_START_END_ERROR = "The Voting End date must lie after the Voting Start Date and between the ".$LNG->DEBATE_NAME." Start On and End On dates, before the discussion dates and after the Lemoning dates, if these are set.";
$LNG->FORM_LABEL_VOTING_DATES_HINT = "(optionel) - Dates entre lesquelles le vote est possible. La date de fin est issue de la date de fin du sujet/débat. Format permis e.g.: \'14 May 2008\' or \'14-05-2008\'";
$LNG->FORM_LABEL_VOTING_DATES_TITLE = "Phase de vote";
$LNG->FORM_LABEL_VOTING_START_DATE = "Le vote commencer le:";
$LNG->FORM_LABEL_VOTING_END_DATE = "finit le:";

/** COUNTDOWNS **/
$LNG->NODE_VOTE_COUNTDOWN_START = "Vote ouvert dans:";
$LNG->NODE_VOTE_COUNTDOWN_OPEN= "Vote ouvert";

$LNG->NODE_COUNTDOWN_START = "Commence dans:";
$LNG->NODE_COUNTDOWN_END = "Finit dans:";
$LNG->NODE_COUNTDOWN_CLOSED = "Fermé";
$LNG->NODE_COUNTDOWN_OPEN= "Toujours ouvert";
$LNG->NODE_COUNTDOWN_DAY = "jour";
$LNG->NODE_COUNTDOWN_DAYS = "jours";
$LNG->NODE_COUNTDOWN_HOUR = "hr";
$LNG->NODE_COUNTDOWN_HOURS = "hrs";
$LNG->NODE_COUNTDOWN_MINUTE = "min";
$LNG->NODE_COUNTDOWN_MINUTES = "mins";
$LNG->NODE_COUNTDOWN_SECOND = "sec";
$LNG->NODE_COUNTDOWN_SECONDS = "secs";
$LNG->NODE_COUNTDOWN_DISCUSSION_END = "La discussion se termine dans:";
$LNG->NODE_COUNTDOWN_REDUCING_END = "La réduction se termine dans:";
$LNG->NODE_COUNTDOWN_DECIDING_END = "Le processus de décision se termine dans:";

/** VOTE AUTO ADD **/
$LNG->DEBATE_VOTE_ARGUMENT_MESSAGE_PRO = "Pourquoi pensez-vous que c'est un bon ".$LNG->SOLUTION_NAME."?";
$LNG->DEBATE_VOTE_ARGUMENT_MESSAGE_CON = "Pourquoi pensez-vous que c'est un mauvais ".$LNG->SOLUTION_NAME."?";
$LNG->DEBATE_VOTE_ARGUMENT_PLACEHOLDER = "Parce que:";

/** LOADING MESSAGES **/
$LNG->LOADING_ITEMS = 'Chargement des objets';
$LNG->LOADING_MESSAGE_PRINT_NODE = 'Cela peut prendre une minute environ dépendamment de la longueur de la list que vous êtes en train de voir';
$LNG->LOADING_ISSUES = '(Chargement '.$LNG->DEBATES_NAME.'...)';
$LNG->LOADING_SOLUTIONS = '(Chargement '.$LNG->SOLUTIONS_NAME.'...)';
$LNG->LOADING_PROS = '(Chargement '.$LNG->PROS_NAME.'...)';
$LNG->LOADING_CONS = '(Chargement '.$LNG->CONS_NAME.'...)';
$LNG->LOADING_RESOURCES = '(Chargement '.$LNG->RESOURCES_NAME.'...)';
$LNG->LOADING_DATA = '(Chargement des données...)';
$LNG->LOADING_COMMENTS = '(Chargement '.$LNG->COMMENTS_NAME.'...)';
$LNG->LOADING_USERS = '(Chargement '.$LNG->USERS_NAME.'...)';
$LNG->LOADING_GROUPS = '(Chargement '.$LNG->GROUPS_NAME.'...)';
$LNG->LOADING_MESSAGE = '(Chargement...)';

$LNG->IDEA_ARGUMENTS_LINK = $LNG->ARGUMENTS_NAME;
$LNG->IDEA_ARGUMENTS_HINT = 'Voir et ajouter '.$LNG->ARGUMENTS_NAME.' sur '.$LNG->SOLUTION_NAME;

$LNG->IDEA_COMMENTS_LINK = $LNG->COMMENTS_NAME;
$LNG->IDEA_COMMENTS_HINT = 'Voir et ajouter '.$LNG->COMMENTS_NAME.' sur '.$LNG->SOLUTION_NAME;
$LNG->IDEA_COMMENTS_CHILDREN_TITLE = $LNG->COMMENTS_NAME;
$LNG->IDEA_COMMENT_LABEL_TITLE = $LNG->COMMENT_NAME." Titre...";
$LNG->IDEA_COMMENT_LABEL_DESC = $LNG->COMMENT_NAME." Description...";
$LNG->FORM_COMMENT_ENTER_SUMMARY_ERROR = 'Entrez un titre pour '.$LNG->COMMENT_NAME.' avant de soumettre';

$LNG->NODE_EDIT_SOLUTION_ICON_HINT = 'Editer '.$LNG->SOLUTION_NAME;

/** LIST NAV **/
$LNG->LIST_NAV_PREVIOUS_HINT = 'Précédent';
$LNG->LIST_NAV_NO_PREVIOUS_HINT = 'Pas de précédent';
$LNG->LIST_NAV_NEXT_HINT = 'Suite';
$LNG->LIST_NAV_NO_NEXT_HINT = 'Pas de suite';
$LNG->LIST_NAV_NO_ITEMS = "Vous n'avez rien encore ajouté.";
$LNG->LIST_NAV_TO = 'à';
$LNG->LIST_NAV_NO_SOLUTION = 'Il n'y a pas '.$LNG->SOLUTIONS_NAME.' À afficher';
$LNG->LIST_NAV_NO_ITEMS = 'Il n'y a pas d'objet à afficher';

$LNG->LIST_NAV_USER_NO_CON = "Non ".$LNG->CONS_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_PRO = "Non ".$LNG->PROS_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_ISSUE = "Non ".$LNG->ISSUES_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_SOLUTION = "Non ".$LNG->SOLUTIONS_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_EVIDENCE = "Non ".$LNG->ARGUMENTS_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_RESOURCE = "Non ".$LNG->RESOURCES_NAME.' trouvé';
$LNG->LIST_NAV_USER_NO_COMMENT = "Non ".$LNG->COMMENTS_NAME.' trouvé';

$LNG->TAB_RSS_ALT = 'flux RSS';
$LNG->TAB_PRINT_ALT = 'Imprimer';
$LNG->TAB_PRINT_HINT_ISSUE = 'Imprimer '.$LNG->DEBATES_NAME.' liste';
$LNG->TAB_PRINT_HINT_SOLUTION = 'Imprimer '.$LNG->SOLUTIONS_NAME.' liste';
$LNG->TAB_PRINT_HINT_PRO = 'Imprimer '.$LNG->PROS_NAME.' liste';
$LNG->TAB_PRINT_HINT_CON = 'Imprimer '.$LNG->CONS_NAME.' liste';
$LNG->TAB_PRINT_HINT_COMMENT = 'Imprimer '.$LNG->COMMENTS_NAME.' liste';

$LNG->TAB_PRINT_TITLE_ISSUE = 'Debate Hub: '.$LNG->DEBATES_NAME.' Listing';
$LNG->TAB_PRINT_TITLE_SOLUTION = 'Debate Hub: '.$LNG->SOLUTIONS_NAME.' Listing';
$LNG->TAB_PRINT_TITLE_PRO = 'Debate Hub: '.$LNG->PRO_NAME.' Listing';
$LNG->TAB_PRINT_TITLE_CON = 'Debate Hub: '.$LNG->CON_NAME.' Listing';
$LNG->TAB_PRINT_TITLE_COMMENT = 'Debate Hub: '.$LNG->COMMENTS_NAME.' Listing';

$LNG->TAB_RSS_ISSUE_HINT = 'Obtenir un flux RSS pour '.$LNG->ISSUES_NAME;
$LNG->TAB_RSS_SOLUTION_HINT = 'Obtenir un flux RSS pour '.$LNG->SOLUTIONS_NAME;
$LNG->TAB_RSS_PRO_HINT = 'Obtenir un flux RSS pour '.$LNG->PROS_NAME;
$LNG->TAB_RSS_CON_HINT = 'Obtenir un flux RSS pour '.$LNG->CONS_NAME;
$LNG->TAB_RSS_COMMENT_HINT = 'Obtenir un flux RSS pour '.$LNG->COMMENTS_NAME;

$LNG->TAB_SEARCH_ISSUE_LABEL = 'Recherche';
$LNG->TAB_SEARCH_SOLUTION_LABEL = 'Recherche';
$LNG->TAB_SEARCH_CON_LABEL = 'Recherche';
$LNG->TAB_SEARCH_PRO_LABEL = 'Recherche ';
$LNG->TAB_SEARCH_USER_LABEL = 'Recherche';
$LNG->TAB_SEARCH_COMMENT_LABEL = 'Recherche';

$LNG->TAB_SEARCH_GO_BUTTON = 'Démarrer';
$LNG->TAB_SEARCH_CLEAR_SEARCH_BUTTON = 'Effacer la recherche actuelle';

//user
$LNG->TAB_USER_HOME = 'Ma page d'acceuil';
$LNG->TAB_USER_ISSUE = 'Mon/ma '.$LNG->ISSUES_NAME;
$LNG->TAB_USER_SOLUTION = 'Mon/ma '.$LNG->SOLUTIONS_NAME;
$LNG->TAB_USER_PRO = 'Mon/ma '.$LNG->PROS_NAME;
$LNG->TAB_USER_CON = 'Mon/ma '.$LNG->CONS_NAME;
$LNG->TAB_USER_COMMENT = 'Mon/ma '.$LNG->COMMENTS_NAME;

/** CHANGE PASSWORD PAGE **/
$LNG->CHANGE_PASSWORD_TITLE = 'Changer le mot de passe';
$LNG->CHANGE_PASSWORD_CURRENT_PASSWORD_ERROR = 'ENtrez votre mot de passe actuel.';
$LNG->CHANGE_PASSWORD_NEW_PASSWORD_ERROR = 'Entrez votre nouveau mot de passe';
$LNG->CHANGE_PASSWORD_CONFIRM_PASSWORD_ERROR = 'Confirmez votre mot de passe';
$LNG->CHANGE_PASSWORD_PASSWORD_INCORRECT_ERROR = 'Le mot de passe actuel est incorrect. Essaye encore!.';
$LNG->CHANGE_PASSWORD_CONFIRM_MISSMATCH_ERROR = "Le mot de passe et la confirmation du mot de passe ne sont pas similaires.";
$LNG->CHANGE_PASSWORD_PROVIDE_PASSWORD_ERROR = 'Vous devez entrer un mot de passe.';
$LNG->CHANGE_PASSWORD_SUCCESSFUL_UPDATE = 'Mot de passe changé avec succès, bravo!';
$LNG->CHANGE_PASSWORD_BACK_TO_PROFILE = 'Aller sur mon profil';
$LNG->CHANGE_PASSWORD_GO_TO_MY_HOME = 'Aller sur ma page d'acceuil';
$LNG->CHANGE_PASSWORD_CURRENT_PASSWORD_LABEL = 'Mot de passe actuel:';
$LNG->CHANGE_PASSWORD_NEW_PASSWORD_LABEL = 'Nouveau mot de passe:';
$LNG->CHANGE_PASSWORD_CONFIRM_PASSWORD_LABEL = 'Confirmez le mot de passe:';
$LNG->CHANGE_PASSWORD_UPDATE_BUTTON = 'Actualiser';

/** FORGOT PASSWORD PAGE **/
$LNG->FORGOT_PASSWORD_TITLE = 'Mot de passe oublié?';
$LNG->FORGOT_PASSWORD_HEADER_MESSAGE = "Entrez votre courriel et nous vous enverrons un lien partir duquel vous pourrez changer votre mot de passe.";
$LNG->FORGOT_PASSWORD_EMAIL_NOT_FOUND_ERROR = 'Courriel inconnu';
$LNG->FORGOT_PASSWORD_EMAIL_SUMMARY = 'Réinitialiser de mot de passe Debate Hub';
$LNG->FORGOT_PASSWORD_EMAIL_SENT_MESSAGE = 'Un courrier vous a eté envoyé afin de réinitialiser votre mot de passe.';
$LNG->FORGOT_PASSWORD_EMAIL_LABEL = 'Courriel:';
$LNG->FORGOT_PASSWORD_SUBMIT_BUTTON = 'Soumettre';

/** LOGIN PAGE **/
$LNG->LOGIN_TITLE = 'Se connecter à '.$CFG->SITE_TITLE;
$LNG->LOGIN_INVALID_ERROR = 'Connection invalide, réesayez.';
$LNG->LOGIN_NOT_REGISTERED_MESSAGE = 'Pas inscrit?';
$LNG->LOGIN_INVITIATION_ONLY_MESSAGE = 'L'inscription sur ce site est actuellement par invitation seulement.';
$LNG->LOGIN_SIGNUP_OPEN_LINK = 'Connectez vous!';
$LNG->LOGIN_SIGNUP_REGISTER_LINK = 'Connectez vous!';
$LNG->LOGIN_USERNAME_LABEL = 'Courriel:';
$LNG->LOGIN_PASSWORD_LABEL = 'Mot de passe:';
$LNG->LOGIN_LOGIN_BUTTON = 'Connection';
$LNG->LOGIN_FORGOT_PASSWORD_LINK = 'mot de passe oublié?';
$LNG->LOGIN_FORGOT_PASSWORD_MESSAGE_PART1 = 'mot de passe oublié? ';
$LNG->LOGIN_FORGOT_PASSWORD_MESSAGE_PART2 = 'Contactez nous';
$LNG->LOGIN_PASSWORD_LENGTH = 'Votre mot de passe doit être au moins de 8 caractères. ';
$LNG->LOGIN_PASSWORD_LENGTH_UPDATE = 'Pour plus de sécurité nous imposons une longueur de mot de passe de 8 caractères minimum pour les nouveaux comptes.<br>Nous recommandons aux utilisateurs des comptes existant ayant un mot de passe de moins de 8 caractères de réinitialiser leur mot de passe.<br>Merci pour votre collaboration à la sécurisation du site.';
$LNG->LOGIN_SOCIAL_SIGNON = 'Ou utilisez un autre service';

/** PROFILE PAGE **/
$LNG->PROFILE_TITLE = 'Éditez le profil';
$LNG->PROFILE_CHANGE_PASSWORD_LINK = '(changer le mot de passe)';
$LNG->PROFILE_INVALID_EMAIL_ERROR = "Entrez une adresse courriel valide";
$LNG->PROFILE_EMAIL_IN_USE_ERROR = "Cette adresse de courriel est déjà utilisée, veuillez utilisez une autre adresse.";
$LNG->PROFILE_FULL_NAME_ERROR = "Enrez votre nom complet.";
$LNG->PROFILE_HOMEPAGE_URL_ERROR = "Entrez une adresse URL valide (en incluant 'http://') pour votre page d'acceuil.";
$LNG->PROFILE_UPDATE_BUTTON = 'Actualiser';
$LNG->PROFILE_DESC_LABEL = 'Description:';
$LNG->PROFILE_PHOTO_CURRENT_LABEL = 'Photo actuelle:';
$LNG->PROFILE_PHOTO_REPLACE_LABEL = 'Remplacer cette photo par:';
$LNG->PROFILE_PHOTO_LABEL = 'Photo:';
$LNG->PROFILE_LOCATION = 'Localisation: (ville)';
$LNG->PROFILE_COUNTRY = 'Pays...';
$LNG->PROFILE_HOMEPAGE = 'Page d'acceuil:';
$LNG->PROFILE_EMAIL_VALIDATE_TEXT = 'Validez votre courriel';
$LNG->PROFILE_EMAIL_VALIDATE_HINT = 'Votre courriel n'as pas été validé. Si vous voulez utiliser la validation sociale vous aurez besoin de valider votre propre courriel.';
$LNG->PROFILE_EMAIL_VALIDATE_MESSAGE = 'Un courriel vous a été envoyé afin de vérifier que vous êtes le propriétaire de ce courriel.';
$LNG->PROFILE_EMAIL_VALIDATE_COMPLETE = 'Ce courriel a été validé.';
$LNG->PROFILE_EMAIL_CHANGE_CONFIRM = '
Vous avez changé votre adresse de courriel.\nCette nouvelle adresse voit devoir être vérifiée\n\nVotre compte utilisateur va dorénavant être bloqué, vous allez être déconnecté et recevrez un nouveau courriel de validation de compte.\nClicquez sur le lien dans le courriel afin de compléter le changement d'adresse.\n\nÊtes vous sûr de vouloir procéder?';

/*******************************************************************************************************/

/** ODD **/
$LNG->RESET_INVALID_MESSAGE = 'Code de réinitialisation du mot de passe invalide';
$LNG->POPUPS_BLOCK = 'Il semble que vous aillé bloqué les pop-ups 
\n\n Changez les propriétés de votre navigateur pour permettre d'ouvrir les pop-ups.';

/** TABS **/
//main
$LNG->TAB_HOME = 'Acceuil';
$LNG->TAB_ISSUE = $LNG->DEBATES_NAME;
$LNG->TAB_GROUP = $LNG->GROUPS_NAME;
$LNG->TAB_USER = $LNG->USERS_NAME;

/** ERROR MESSAGES */
$LNG->DATABASE_CONNECTION_ERROR = 'impossible de se connecter à la base de données. Vérifier la configuration du server.';
$LNG->ITEM_NOT_FOUND_ERROR = 'Objet non trouvé';

/** BUTTONS AND LINK HINTS **/
$LNG->EDIT_BUTTON_TEXT = 'Editer';
$LNG->EDIT_BUTTON_HINT_ISSUE = 'Editer ceci '.$LNG->ISSUE_NAME;
$LNG->DELETE_BUTTON_ALT = 'Supprimer';
$LNG->DELETE_BUTTON_HINT = 'Supprimer cet objet';
$LNG->NO_DELETE_BUTTON_ALT = 'Impossible de supprimer';
$LNG->NO_DELETE_BUTTON_HINT = 'Vous ne pouvez supprimer cet objet. Quelqu'un s'y est connecté.';

/** USER PAGE **/
$LNG->USER_FOLLOW_HINT = 'Suivre cette personne…';
$LNG->USER_FOLLOW_BUTTON = 'Suivre';
$LNG->USER_UNFOLLOW_HINT = 'Ne plus suivre cette personne…';
$LNG->USER_UNFOLLOW_BUTTON = 'Ne plus suivre';

$LNG->USER_RSS_HINT = 'Trouver un flux RSS pour ';
$LNG->USER_RSS_BUTTON = 'Flux RSS';

/** SORTS **/
$LNG->SORT_BY = 'Trier par';
$LNG->SORT_ASC = 'Montant';
$LNG->SORT_DESC = 'Descendant';
$LNG->SORT_CREATIONDATE = 'Date de création';
$LNG->SORT_MODDATE = 'Date de Modification';
$LNG->SORT_TITLE = 'Titre';
$LNG->SORT_NAME = 'Nom';
$LNG->SORT_CONNECTIONS = 'Connections';
$LNG->SORT_VOTES = 'Votes';
$LNG->SORT_RANDOM = "Au hasard";

/** SEARCH RESULTS PAGE **/
$LNG->SEARCH_TITLE_ERROR = 'Résultats de recherche';
$LNG->SEARCH_ERROR_EMPTY = 'Vous devez entrer une requête de recherche.';
$LNG->SEARCH_TITLE = 'Résultats de recherche pour: ';
$LNG->SEARCH_BACKTOTOP = 'Revenir en haut';
$LNG->SEARCH_BACKTOTOP_IMG_ALT = 'Haut';

/** OVERVIEW TITLES **/
$LNG->OVERVIEW_RESOURCE_MOSTCONNECTED_TITLE = 'les plus connectés '.$LNG->RESOURCES_NAME;

/** FORM LABELS, BUTTONS AND TEXT **/

$LNG->CONDITIONS_REGISTER_FORM_TITLE = 'Conditions et termes d'usage';
$LNG->CONDITIONS_REGISTER_FORM_MESSAGE = 'En s'inscrivant en tant qu'utilisateur de ce Hub vous acceptez les termes et conditions de ce Hub comme écrit dans notre <a href="'.$CFG->homeAddress.'ui/pages/conditionsofuse.php">Termes d'utilisation</a>.';
$LNG->CONDITIONS_AGREE_FORM_REGISTER_MESSAGE = 'J'accepte les termes et conditions d'utilisations de ce Hub';
$LNG->CONDITIONS_AGREE_FAILED_MESSAGE = 'Vous devez accepter les termes et conditions d'utilisation de ce Hub avant de pouvoir vous inscrire.';

/** OTHER FORMS **/
$LNG->FORM_REGISTER_OPEN_TITLE = 'S'inscrire';
$LNG->FORM_REGISTER_REQUEST_TITLE = 'Demande d'inscription';
$LNG->FORM_REGISTER_ADMIN_TITLE = 'Inscrire un nouvel utilisateur';
$LNG->FORM_REGISTER_EMAIL = 'Courriel:';
$LNG->FORM_REGISTER_DESC = 'Description:';
$LNG->FORM_REGISTER_PASSWORD = 'Mot de passe:';
$LNG->FORM_REGISTER_PASSWORD_CONFIRM = 'Confirmer mot de passe:';
$LNG->FORM_REGISTER_NAME = 'Nom Complet';
$LNG->FORM_REGISTER_INTEREST = 'Intéret dans ce DebateHub:';
$LNG->FORM_REGISTER_LOCATION = 'Localisation: (ville)';
$LNG->FORM_REGISTER_COUNTRY = 'Pays…';
$LNG->FORM_REGISTER_HOMEPAGE = 'Page d'acceuil:';
$LNG->FORM_REGISTER_NEWSLETTER = 'Newsletter:';
$LNG->FORM_REGISTER_CAPTCHA = 'Êtes-vous un humain?';
$LNG->FORM_REGISTER_SUBMIT_BUTTON = 'S'inscrire';
$LNG->FORM_REGISTER_REQUEST_DESC = 'Description personnelle:';
$LNG->FORM_REGISTER_IMAGE_ERROR = "Éditez votre profil et uploadez une image différente une fois que vous avez complété votre inscription.";

$LNG->REGISTRATION_SUCCESSFUL_TITLE = 'Inscription ';
$LNG->REGISTRATION_SUCCESSFUL_MESSAGE = '<Vous allez rapidemment recevoir un courriel. Vous devez cliquer sur le lien à l'intérieur pour valider votre adresse de courriel et compléter votre inscription Hub.';
$LNG->REGISTRATION_COMPLETE_TITLE = 'Inscription finalisée';
$LNG->REGISTRATION_FAILED = 'Votre inscription n'a pu être finalisée. Essayez de vous inscrire une prochaine fois ';
$LNG->REGISTRATION_FAILED_INVALID = 'Votre inscription n'a pas pu être complétée, la clé est invalide. Enregistrez vous une nouvelle fois';
$LNG->REGISTRATION_SUCCESSFUL_LOGIN = "Vous pouvez dorénavant <a href='".$CFG->homeAddress."ui/pages/login.php'>se connecter</a>";

$LNG->REGISTRATION_REQUEST_SUCCESSFUL_TITLE = 'Requête d'enregistrement recue';
$LNG->REGISTRATION_REQUEST_SUCCESSFUL_MESSAGE = ' Merci de votre intéret à contribuer à ce Debate Hub.<br>Votre demande d' inscription vous a été envoyée et vous serez contacté sous peu.';

$LNG->REGISTRATION_REQUEST_SUCCESSFUL_TITLE_ADMIN = 'Enregistrement d'un nouvel utilisateur réussie';
$LNG->REGISTRATION_REQUEST_SUCCESSFUL_MESSAGE_ADMIN = "Un courriel a été envoyé au nouvel utilisateur avec leur détail de connection";

$LNG->FORM_HEADER_MESSAGE = 'Soyez conscient que toute donnée entrée ici sera visible publiquement sur ce site par les autres utilisateurs.';
$LNG->FORM_REQUIRED_FIELDS_MESSAGE_PART1 = '(champs avec un(e)';
$LNG->FORM_REQUIRED_FIELDS_MESSAGE_PART2 = 'sont obligatoire';
$LNG->FORM_REQUIRED_FIELDS_MESSAGE_PART3 = ', à moins qu'ils/elles ne soient dans une sous-section optionnelle que vous n'avez pas complété)';

$LNG->FORM_REQUIRED_FIELDS = 'Indiquez le champ demandé';
$LNG->FORM_LABEL_SUMMARY = 'Summary:';
$LNG->FORM_LABEL_DESC = 'Description:';
$LNG->FORM_LABEL_URL = 'Url:';
$LNG->FORM_LABEL_NAME = 'Nom:';

$LNG->FORM_DESC_PLAIN_TEXT_LINK = 'Texte brut';
$LNG->FORM_DESC_PLAIN_TEXT_HINT = 'Changer au texte brut. Le formatage sera perdu.';
$LNG->FORM_DESC_HTML_TEXT_LINK = 'Formattage';
$LNG->FORM_DESC_HTML_TEXT_HINT = 'Montrer la barre d'outils de formatage.';
$LNG->FORM_DESC_HTML_SWITCH_WARNING = 'Êtes vous sûr de changer en texte brut? Attention: tout formattage sera perdu.';

$LNG->FORM_BUTTON_REMOVE = 'Enlever';
$LNG->FORM_BUTTON_ADD_ANOTHER = 'ajouter un autre';
$LNG->FORM_BUTTON_ADD = 'Ajouter';
$LNG->FORM_BUTTON_PUBLISH = 'Publier';
$LNG->FORM_BUTTON_CANCEL = 'Annuler';
$LNG->FORM_BUTTON_CLOSE = 'Fermer';
$LNG->FORM_BUTTON_CONTINUE = 'Continuer';
$LNG->FORM_BUTTON_PRINT_PAGE = 'Imprimer la page';

$LNG->FORM_ERROR_NOT_ADMIN = 'Vous n'avez pas les autorisations pour voir cette page';
$LNG->FORM_ERROR_MESSAGE = 'Les problèmes suivants ont été identifié, essayez une nouvelle fois';
$LNG->FORM_ERROR_MESSAGE_LOGIN = 'Les problèmes suivants ont été identifié concernant votre tentative de connection:';
$LNG->FORM_ERROR_MESSAGE_REGISTRATION = 'Les problèmes suivant ont été identifié concernant votre inscription, essayez de nouveau:';
$LNG->FORM_ERROR_NOT_ADMIN = "Vous devez être un administrateur pour accéder à cette page";
$LNG->FORM_ERROR_PASSWORD_MISMATCH = "Les mot de passe et la confirmation de mot de passe ne correspondent pas. Essayez de nouveau.";
$LNG->FORM_ERROR_PASSWORD_MISSING = "Entrez un mot de passe.";
$LNG->FORM_ERROR_NAME_MISSING = 'Entrez votre nom complet.';
$LNG->FORM_ERROR_INTEREST_MISSING = "Expliquez pourquoi vous souhaitez vous inscrire.";
$LNG->FORM_ERROR_URL_INVALID = "Entrez une adresse URL complète (includant 'http://').";
$LNG->FORM_ERROR_EMAIL_INVALID = "Entrez une adresse de courriel valide.";
$LNG->FORM_ERROR_EMAIL_USED = "Cette adresse de courriel est déjà utilisée, connectez vous ou utilisez une adresse différente.";
$LNG->FORM_ERROR_CAPTCHA_INVALID = "Le reCAPTCHA n'a pas été entré correctement. Essayez à nouveau.";

//Activity Forms
$LNG->FORM_ACTIVITY_HEADING = 'Activité récente pour';
$LNG->FORM_ACTIVITY_TABLE_HEADING_DATE = 'Date';
$LNG->FORM_ACTIVITY_TABLE_HEADING_TYPE = 'Type';
$LNG->FORM_ACTIVITY_TABLE_HEADING_DONEBY = 'Fais par';
$LNG->FORM_ACTIVITY_TABLE_HEADING_ACTION = 'Action';
$LNG->FORM_ACTIVITY_TABLE_HEADING_ITEM = 'Objet';
$LNG->FORM_ACTIVITY_ACTION_STARTED_FOLLOWING = 'a commencé le suivant';
$LNG->FORM_ACTIVITY_ACTION_STARTED_FOLLOWING_ITEM = 'a commencé à suivre cet objet';
$LNG->FORM_ACTIVITY_ACTION_VOTE_PROMOTED = 'promu';
$LNG->FORM_ACTIVITY_ACTION_VOTE_DEMOTED = 'rétrogradé';
$LNG->FORM_ACTIVITY_ACTION_VOTE_PROMOTED_ITEM = 'a promu cet objet';
$LNG->FORM_ACTIVITY_ACTION_VOTE_DEMOTED_ITEM = 'a rétrogradé cet objet';
$LNG->FORM_ACTIVITY_ACTION_ADDED = 'ajouté';
$LNG->FORM_ACTIVITY_ACTION_EDITED = 'edité';
$LNG->FORM_ACTIVITY_ACTION_ADDED_ITEM = 'a ajouté cet objet';
$LNG->FORM_ACTIVITY_ACTION_EDITED_ITEM = 'a édité cet objet';
$LNG->FORM_ACTIVITY_ACTION_ASSOCIATED = 'a associé';
$LNG->FORM_ACTIVITY_ACTION_DESOCIATED = 'a enlevé l'association';
$LNG->FORM_ACTIVITY_ACTION_ADDED_RESOURCE = "a ajouté le/là ".$LNG->RESOURCE_NAME;
$LNG->FORM_ACTIVITY_ACTION_ADDED_EVIDENCE_PRO = "a ajouté Soutien".$LNG->ARGUMENT_NAME;
$LNG->FORM_ACTIVITY_ACTION_ADDED_EVIDENCE_CON = "a ajouté Contre".$LNG->ARGUMENT_NAME;
$LNG->FORM_ACTIVITY_ACTION_ADDED_EVIDENCE = "a associé cela avec le ".$LNG->ARGUMENT_NAME;
$LNG->FORM_ACTIVITY_ACTION_ASSOCIATED_WITH = "a associé ceci avec le ";
$LNG->FORM_ACTIVITY_ACTION_REMOVED = "enlevé";
$LNG->FORM_ACTIVITY_ACTION_REMOVED_RESOURCE = "a enlevé le ".$LNG->RESOURCE_NAME;
$LNG->FORM_ACTIVITY_ACTION_REMOVED_EVIDENCE = "a enlevé le ".$LNG->ARGUMENT_NAME;
$LNG->FORM_ACTIVITY_ACTION_REMOVED_ASSOCIATION = "a enlevé l'association avec ";
$LNG->FORM_ACTIVITY_ACTION_INDICATED_THAT = 'indiqué par';
$LNG->FORM_ACTIVITY_ACTION_STRONG_SOLUTION = 'était un fort '.$LNG->SOLUTION_NAME.' for';
$LNG->FORM_ACTIVITY_ACTION_CONVINCING_EVIDENCE = 'était convaincant '.$LNG->ARGUMENT_NAME.' for';
$LNG->FORM_ACTIVITY_ACTION_SOUND_EVIDENCE = 'était solide '.$LNG->ARGUMENT_NAME.' for';
$LNG->FORM_ACTIVITY_ACTION_PROMOTED = 'devrait être promu contre';
$LNG->FORM_ACTIVITY_ACTION_WEAK_SOLUTION = 'était faible '.$LNG->SOLUTION_NAME.' for';
$LNG->FORM_ACTIVITY_ACTION_UNCONVINCING_EVIDENCE = 'n'était pas convaincant '.$LNG->ARGUMENT_NAME.' pour';
$LNG->FORM_ACTIVITY_ACTION_UNSOUND_EVIDENCE = 'n'était pas solide '.$LNG->ARGUMENT_NAME.' pour';
$LNG->FORM_ACTIVITY_ACTION_DEMOTED = 'devrait être rétrogradé contre / par rapport à ';
$LNG->FORM_ACTIVITY_LABEL_WITH = 'avec';
$LNG->FORM_ACTIVITY_LABEL_FROM = 'venant de';
$LNG->FORM_ACTIVITY_PROBLEM_MESSAGE = 'Les problèmes suivant ont été identifiés à partir de la récupération des données d'activité: ';

//Issue
$LNG->FORM_ISSUE_TITLE_ADD = 'Ajouter un nouveau '.$LNG->DEBATE_NAME;
$LNG->FORM_ISSUE_TITLE_EDIT = 'Editer ce '.$LNG->DEBATE_NAME;
$LNG->FORM_ISSUE_ENTER_SUMMARY_ERROR = 'Entrer un(e) '.$LNG->ISSUE_NAME.' résumez avant de publier';
$LNG->FORM_ISSUE_CREATE_ERROR_MESSAGE = 'Un problème est arrivé lors de la création du '.$LNG->ISSUE_NAME.':';
$LNG->FORM_ISSUE_HEADING_MESSAGE = 'Ajoutez une question que vous êtes en train d'étudier ou un(e) Add a question you are investigating or a '.$LNG->ISSUE_NAME.' vous pensez que la communnauté doit aborder.';
$LNG->FORM_ISSUE_LABEL_SUMMARY = $LNG->ISSUE_NAME.' Résumé:';
$LNG->FORM_ISSUE_NOT_FOUND = 'Cette chose requise '.$LNG->ISSUE_NAME.' n'a pu être trouvé';

/** FORM ROLLOVER HINTS **/
// Issues
$LNG->ISSUE_SUMMARY_FORM_HINT = '(obligatoire) - Entrer un nouveau '.$LNG->ISSUE_NAME.' résumé. Cela formera le '.$LNG->DEBATE_NAME.' titre affiché dans les listes and doit décrire le problème ou le sujet concerné par le débat.';
$LNG->ISSUE_DESC_FORM_HINT = '(optionnel) - Entrez une description plus longue de '.$LNG->ISSUE_NAME.' dont vous voulez débattre';

/**** EMAIL TEXT *****/
$LNG->WELCOME_REGISTER_OPEN_SUBJECT = "Bienvenue à ".$CFG->SITE_TITLE;
$LNG->WELCOME_REGISTER_OPEN_BODY = 'Merci de vous être inscrit.<br><br>Pour plus d'informations concernant DebateHub, vous pouvez lire notre <a href="'.$CFG->homeAddress.'ui/pages/about.php">concernant la page</a>.<br>Pour tout aide concernant comment d´buter sur le hub, vous pouvez visiter notre <a href="'.$CFG->homeAddress.'help/">help page</a>.<br>Why not start using the <a href="'.$CFG->homeAddress.'">'.$CFG->SITE_TITLE.'</a> aujourd'hui';

$LNG->VALIDATE_REGISTER_SUBJECT = "Complétez votre inscription sur ".$CFG->SITE_TITLE;

$LNG->WELCOME_REGISTER_REQUEST_SUBJECT = "Demande d'inscription pour ".$CFG->SITE_TITLE;
$LNG->WELCOME_REGISTER_REQUEST_BODY = 'Merci d'avoir demandé un compte sur <a href="'.$CFG->homeAddress.'">'.$CFG->SITE_TITLE.'</a>.<br>Ceci est pour confirmer que nous avons recu votre requête.<br>Nous tenterons de procéder à votre requete dans les 24 heures, mais cela peut prendre plus de temps si nous avons une forte charge de travail.<br>Vous allez recevoir un autre courriel avec vos détails d'inscription, si votre requête a réussi.';
$LNG->WELCOME_REGISTER_REQUEST_BODY_ADMIN = "L'utilisateur ci-dessus a demandé un compte. Utilisez le bureau administrateur pour accepter ou rejeter ce nouvel utilisateur.";

$LNG->WELCOME_REGISTER_CLOSED_SUBJECT = "Inscription le ".$CFG->SITE_TITLE;

$LNG->VALIDATE_GROUP_JOIN_SUBJECT = "Demande de rejoindre le groupe le ".$CFG->SITE_TITLE;

/*** NODE LISTINGS AND ITEMS ***/
$LNG->NODE_DETAIL_BUTTON_HINT = 'Aller aux informations complètes concernant cet objet.';
$LNG->NODE_TYPE_ICON_HINT = 'Voir l'image originelle';
$LNG->NODE_EXPLORE_BUTTON_TEXT = 'Explorer >>';
$LNG->NODE_EXPLORE_BUTTON_HINT = 'Cliquez pour révéler/cacher où vous pouvez aller et voir plus d'informations et d'activité aux alentours de cet objet';

$LNG->NODE_VOTE_FOR_ICON_ALT = 'Voté pour';
$LNG->NODE_VOTE_AGAINST_ICON_ALT = 'Voté contre';
$LNG->NODE_VOTE_REMOVE_HINT = 'Désactivé…';
$LNG->NODE_VOTE_FOR_ADD_HINT = 'Promouvoir ceci…';
$LNG->NODE_VOTE_FOR_SOLUTION_HINT = 'Fort '.$LNG->SOLUTION_NAME.' pour ceci';
$LNG->NODE_VOTE_FOR_EVIDENCE_SOLUTION_HINT = 'Convaincant '.$LNG->ARGUMENT_NAME.' pour ceci';
$LNG->NODE_VOTE_AGAINST_ADD_HINT = 'Rétrograder ceci…';
$LNG->NODE_VOTE_AGAINST_SOLUTION_HINT = 'Faible '.$LNG->SOLUTION_NAME.' pour ceci';
$LNG->NODE_VOTE_AGAINST_EVIDENCE_SOLUTION_HINT = 'Non convaincant '.$LNG->ARGUMENT_NAME.' pour ceci';
$LNG->NODE_VOTE_FOR_LOGIN_HINT = 'Connectez vous pour promouvoir ceci';
$LNG->NODE_VOTE_AGAINST_LOGIN_HINT = 'Connecter vous pour rétrograder ceci';
$LNG->NODE_VOTE_MENU_TEXT = 'Voter:';
$LNG->NODE_VOTE_OWN_HINT = 'Vous ne pouvez pas voter ces ';

$LNG->NODE_ADDED_ON = 'Ajouté le:';
$LNG->NODE_URL_HEADING = 'Url:';

$LNG->NODE_DISCONNECT_CHECK_MESSAGE_PART1 = 'Êtes vous sûr de vouloir vous déconnecter?;
$LNG->NODE_DISCONNECT_CHECK_MESSAGE_PART2 = 'de';
$LNG->NODE_DISCONNECT_CHECK_MESSAGE_PART3 = '?';
$LNG->NODE_DELETE_CHECK_MESSAGE = 'Êtes vous sûr de vouloir supprimer le';
$LNG->NODE_DELETE_CHECK_MESSAGE_ITEM = 'objet';
$LNG->NODE_FOLLOW_ITEM_HINT = 'Suivre cet objet…';
$LNG->NODE_UNFOLLOW_ITEM_HINT = 'Ne plus suivre cet objet…';

/** BUILDER TOOLBAR **/
$LNG->BUILDER_GOTO_HOME_SITE_HINT = "aller à ".$CFG->SITE_TITLE." Website";

/** USERS **/
$LNG->USERS_UNFOLLOW = 'Ne plus suivre cette personne…';
$LNG->USERS_FOLLOW = 'Suivre cette personne…';
$LNG->USERS_FOLLOW_ICON_ALT = 'Follow';
$LNG->USERS_STARTED_FOLLOWING_ON = 'A commencé à suivre le:';
$LNG->USERS_LAST_LOGIN = 'Dernière connection:';
$LNG->USERS_LAST_ACTIVE = 'dernière fois actif:';
$LNG->USERS_DATE_JOINED = 'date d'inscription:';

/** USER HOME PAGE **/
$LNG->USER_HOME_LOCATION_LABEL = 'Localisation:';
$LNG->USER_HOME_TABLE_ITEM_TYPE = 'Type d'objet';
$LNG->USER_HOME_TABLE_CREATION_COUNT = 'Compter';
$LNG->USER_HOME_TABLE_VIEW = 'Voir';
$LNG->USER_HOME_TABLE_TYPE = 'Type';
$LNG->USER_HOME_TABLE_NAME = 'Nom';
$LNG->USER_HOME_TABLE_ACTION = 'Action';
$LNG->USER_HOME_TABLE_PICTURE = 'Image';
$LNG->USER_HOME_PROFILE_HEADING = 'Profil';
$LNG->USER_HOME_VIEW_CONTENT_HEADING = 'Résumé du contenu de la création';
$LNG->USER_HOME_VIEW_ACTIVITIES_LINK = "( Voir toutes les activités de cette personne )";
$LNG->USER_HOME_VIEW_ACTIVITIES_HINT =  "Ceci ouvre une nouvelle fenêtre et peut prendre du temps pour charger en fonction du volume d'activité de la personne.";
$LNG->USER_HOME_FOLLOWING_HEADING = 'Suit';
$LNG->USER_HOME_ACTIVITY_ALERT = 'Envoyer un courriel d'alerte de nouvelle activité';
$LNG->USER_HOME_EMAIL_HOURLY = 'Par heure';
$LNG->USER_HOME_EMAIL_DAILY = 'Par jour';
$LNG->USER_HOME_EMAIL_WEEKLY = 'Par semaine';
$LNG->USER_HOME_EMAIL_MONTHLY = 'Par mois';
$LNG->USER_HOME_PERSON_LABEL = 'Personne';
$LNG->USER_HOME_UNFOLLOW_LINK = 'Ne plus suivre';
$LNG->USER_HOME_EXPLORE_LINK = 'Explorer';
$LNG->USER_HOME_ACTIVITY_LINK = 'Activité';
$LNG->USER_HOME_NOT_FOLLOWING_MESSAGE = 'Ne suis pas des personnes ni des objets actuellement.';
$LNG->USER_HOME_FOLLOWERS_HEADING = 'Suiveur';
$LNG->USER_HOME_NO_FOLLOWERS_MESSAGE = 'Pas de suiveur actuellement.';
$LNG->USER_HOME_ANALYTICS_LINK_TEXT = '( Voir les données d'analyse sur cette personne )';
$LNG->USER_HOME_ANALYTICS_LINK_HINT =  "Ceci ouvre une nouvelle fenêtre et peut prendre du temps pour charger en fonction du volume d'activité de la personne";

/** MAIN TAB SCREENS - TABBERLIB **/
$LNG->TAB_ADD_GROUP_LINK = 'Add '.$LNG->GROUP_NAME;
$LNG->TAB_ADD_ISSUE_LINK = 'Add '.$LNG->DEBATE_NAME;
$LNG->TAB_ADD_ISSUE_HINT = 'Add '.$LNG->DEBATE_NAME;
$LNG->TAB_ADD_GROUP_HINT = 'Add '.$LNG->GROUP_NAME;

/** HOMEPAGE **/
$LNG->HOMEPAGE_TITLE = '';
$LNG->HOMEPAGE_FIRST_PARA = '<b>'.$CFG->SITE_TITLE.'</b> donne aux communautés en ligne un espace pour: i. soulever des questions; ii. partager des idées; iii. debatre des pour et contre ; iv. et voter les contributions afin d'organiser collectivement et de progresser sur les bonnes idées.  DebateHub est dinstint and son usage de données analytiques avancées pour révéler les idées les plus argumentées, et dans la visualisation de votre commaunauté.';
$LNG->HOMEPAGE_SECOND_PARA_PART2 = '<b>Pour les membres de la communauté:</b><br>Debate Hub vous êtes à partager de nouvelles idées, mais aussi pour les ouvrir au débat. Il vous aide à argumenter vos points de vue, et d'identifier les idées les plus robustes parmi la masse d'informations.';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= '<p><b>Pour les animateurs de communauté:</b><br>Debate Hub fournit de nouveaux outils afin d'organiser votre communauté, réduire les doublons d'idées, et permet l'analyse de contenu et la mise en résumé. Le tableau d'analyse concernant vos groupes vous aide à identifier les connections entre personnes et idées, de détecter les manques d'information, de découvrir de nouvelles logiques de (dés)accords, et de produire des rémusés visuels du débat.</p>';
$LNG->FOOTER_PARTNERSHIP_LABEL = 'En partenariat avec';
$LNG->HOMEPAGE_KEEP_READING = 'Continuer à lire';
$LNG->HOMEPAGE_READ_LESS = 'lire moins';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= 'à faire pour que vous puissiez:';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= '<ul>';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= '<li>Cartographier vos idées - ajouter '.$LNG->ISSUES_NAME.', ';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= $LNG->SOLUTIONS_NAME.', ';
$LNG->HOMEPAGE_SECOND_PARA_PART2 .= $LNG->ARGUMENTS_NAME.' et '.$LNG->RESOURCES_NAME.'</li></ul>';

/** WIDGETS **/
$LNG->WIDGET_FOLLOW_SIGNIN_HINT = 'Se connecter pour suivre cette entrée';
$LNG->WIDGET_NONE_FOUND_PART1 = 'Pas';
$LNG->WIDGET_NONE_FOUND_PART2 = 'ajouté encore';
$LNG->WIDGET_NO_RESULTS_FOUND = 'Pas de résultats trouvés';
$LNG->WIDGET_NO_GROUPS_FOUND = 'Pas '.$LNG->GROUPS_NAME.' touvé';

/** ADMIN AREA **/

$LNG->ADMIN_TITLE = "Espace d'administration";
$LNG->ADMIN_BUTTON_HINT = "Ceci ouvre une nouvelle fenêtre";
$LNG->ADMIN_STATS_BUTTON_HINT = "Aller sur les pages d'analyse du site";
$LNG->ADMIN_REGISTER_NEW_USER_LINK = 'Enregistrer un nouvel utilisateur';
$LNG->ADMIN_NOT_ADMINISTRATOR_MESSAGE = 'Désolé, vous avez besoin d'être un administrateur pour pouvoir accéder à cette page';
$LNG->ADMIN_MANAGE_USERS_DELETE_ERROR = 'Il y a eu un problème en essayant de supprimer l'utilisateur avec l' id :';

$LNG->NODE_NEWS_POSTED_ON = 'Posté le';
$LNG->ADMIN_MANAGE_NEWS_LINK = "Gérer ".$LNG->NEWSS_NAME;
$LNG->ADMIN_MANAGE_NEWS_DELETE_ERROR = 'Il y a eu un problème en supprimant le/la '.$LNG->NEWS_NAME.' avec l'id:';
$LNG->ADMIN_NEWS_MISSING_NAME_ERROR = 'Vous vez entrer un '.$LNG->NEWS_NAME.' titre.';
$LNG->ADMIN_NEWS_ID_ERROR  = 'Erreur avec '.$LNG->NEWS_NAME.' id.';
$LNG->ADMIN_NEWS_DELETE_QUESTION_PART1 = 'Êtes vous sûr de vouloir supprimer cet objet?'.$LNG->NEWS_NAME;
$LNG->ADMIN_NEWS_DELETE_QUESTION_PART2 = '?';
$LNG->ADMIN_NEWS_DELETE_SUCCESS_PART1 = $LNG->NEWS_NAME;
$LNG->ADMIN_NEWS_DELETE_SUCCESS_PART2 = 'a maintenant été supprimé';
$LNG->ADMIN_NEWS_TITLE = "Gérer ".$LNG->NEWSS_NAME;
$LNG->ADMIN_NEWS_ADD_NEW_LINK = 'Ajouter '.$LNG->NEWS_NAME;
$LNG->ADMIN_NEWS_NAME_LABEL = 'Titre:';
$LNG->ADMIN_NEWS_DESC_LABEL = 'Description:';
$LNG->ADMIN_NEWS_TITLE_HEADING = $LNG->NEWS_NAME;
$LNG->ADMIN_NEWS_ACTION_HEADING = 'Action';
$LNG->ADMIN_NEWS_EDIT_LINK = 'editer';
$LNG->ADMIN_NEWS_DELETE_LINK = 'supprimer';

$LNG->ADMIN_CRON_FOLLOW_USER_ACTIVITY_MESSAGE = 'Il y a eu de l'activité dans ';
$LNG->ADMIN_CRON_FOLLOW_SEE_ACTIVITY_LINK = 'Voir l'activité';
$LNG->ADMIN_CRON_FOLLOW_ACTIVITY_FOR = 'Activité pour';
$LNG->ADMIN_CRON_FOLLOW_EXPLORE_LINK = 'Explorer';
$LNG->ADMIN_CRON_FOLLOW_ON_THE = 'Sur le';
$LNG->ADMIN_CRON_FOLLOW_THIS_ITEM = 'Cet objet';
$LNG->ADMIN_CRON_FOLLOW_STARTED = 'a commencé à suivre';
$LNG->ADMIN_CRON_FOLLOW_PROMOTED = 'promu';
$LNG->ADMIN_CRON_FOLLOW_DEMOTED = 'rétrograder';
$LNG->ADMIN_CRON_FOLLOW_ADDED = 'ajouté';
$LNG->ADMIN_CRON_FOLLOW_EDITED = 'edité';
$LNG->ADMIN_CRON_FOLLOW_ADDED_RESOURCE = 'ajouté le '.$LNG->RESOURCE_NAME;
$LNG->ADMIN_CRON_FOLLOW_ADDED_SUPPORTING_EVIDENCE = 'ajouté  '.$LNG->PRO_NAME;
$LNG->ADMIN_CRON_FOLLOW_ADDED_COUNTER_EVIDENCE = 'ajouté '.$LNG->CON_NAME;
$LNG->ADMIN_CRON_FOLLOW_ASSOCIATED_EVIDENCE = 'a associé ceci avec le '.$LNG->ARGUMENT_NAME;
$LNG->ADMIN_CRON_FOLLOW_ASSOCIATED_WITH = 'a associé ceci avec le';
$LNG->ADMIN_CRON_FOLLOW_REMOVED = 'enlevé';
$LNG->ADMIN_CRON_FOLLOW_REMOVED_RESOURCE = 'a enlevé le '.$LNG->RESOURCE_NAME;
$LNG->ADMIN_CRON_FOLLOW_REMOVED_SUPPORTING_EVIDENCE = 'enlevé  '.$LNG->PRO_NAME;
$LNG->ADMIN_CRON_FOLLOW_REMOVED_COUNTER_EVIDENCE = 'enlevé '.$LNG->CON_NAME;
$LNG->ADMIN_CRON_FOLLOW_REMOVED_EVIDENCE = 'enlevé le '.$LNG->ARGUMENT_NAME;
$LNG->ADMIN_CRON_FOLLOW_REMOVED_ASSOCIATION = 'enlever vec';
$LNG->ADMIN_CRON_FOLLOW_DATE_FROM_TO_PART1 = 'De';
$LNG->ADMIN_CRON_FOLLOW_DATE_FROM_TO_PART2 = 'À';
$LNG->ADMIN_CRON_FOLLOW_WEEKLY = 'hebdomadaire';
$LNG->ADMIN_CRON_FOLLOW_WEEKLY_TITLE = 'Rapport d'activité Debate Hub hebdomadaire';
$LNG->ADMIN_CRON_FOLLOW_WEEKLY_DIGEST_RUN = 'Digest hebdomadaire des activités sur '.$CFG->SITE_TITLE.' Démarrer';
$LNG->ADMIN_CRON_FOLLOW_MONTHLY = 'Mensuel';
$LNG->ADMIN_CRON_FOLLOW_MONTHLY_TITLE = 'Rapport mensuel de débat Debate Hub';
$LNG->ADMIN_CRON_FOLLOW_MONTHLY_DIGEST_RUN = 'Digest mensuel des activtés dans '.$CFG->SITE_TITLE.' Démarrer';
$LNG->ADMIN_CRON_FOLLOW_DAILY = 'Journalier';
$LNG->ADMIN_CRON_FOLLOW_DAILY_TITLE = 'Rapport journalier d'activité Debate Hub';
$LNG->ADMIN_CRON_FOLLOW_DAILY_DIGEST_RUN = 'Digest journalier des activités dans Daily Digest for Activites on '.$CFG->SITE_TITLE.' Run';
$LNG->ADMIN_CRON_FOLLOW_HOURLY = 'Hourly';
$LNG->ADMIN_CRON_FOLLOW_HOURLY_TITLE = 'Hourly Debate Hub Activity Report';
$LNG->ADMIN_CRON_FOLLOW_HOURLY_DIGEST_RUN = 'Hourly Digest for Activites on '.$CFG->SITE_TITLE.' Run';
$LNG->ADMIN_CRON_FOLLOW_NO_DIGEST = 'No email digest for:';
$LNG->ADMIN_CRON_FOLLOW_UNSUBSCRIBE_PART1 = 'To stop receiving this email digest or change the frequency it is sent please login to the hub and either select a different frequency option or uncheck \'Send email Alert of New Activity\' on your';
$LNG->ADMIN_CRON_FOLLOW_UNSUBSCRIBE_PART2 = $LNG->HEADER_MY_HUB_LINK.' home page';

$LNG->ADMIN_CREATE_LINK_TYPES_TITLE = 'Create Link Types';
$LNG->ADMIN_CREATE_NODE_TYPES_TITLE = 'Create Node Types';
$LNG->ADMIN_CRON_RECENT_ACTIVITY_DIGEST_RUN = 'Recent Activite Digest on '.$CFG->SITE_TITLE.' Run';
$LNG->ADMIN_CRON_RECENT_ACTIVITY_NO_DIGEST = 'No recent activity digest for:';
$LNG->ADMIN_CRON_RECENT_ACTIVITY_TITLE = 'Debate Hub Recent Activity Report';
$LNG->ADMIN_CRON_RECENT_ACTIVITY_MESSAGE = 'See below for the top 5 most recent items entered for each Debate Hub Category.';

$LNG->ADMIN_NEWS_USERS = 'User List';

/** HELP PAGES **/
$LNG->HELP_NETWORKMAP_TITLE = 'Network Map';
$LNG->HELP_NETWORKMAP_BODY = '<b>Background:</b><br><br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>L-drag to pan</b><br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>R-click</b> to fit network on screen (Apple-Click on Macs)<br>&nbsp;&nbsp&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>R-drag to zoom in/out</b> (Apple-Drag on Macs)<br><br>';
$LNG->HELP_NETWORKMAP_BODY .= '<b>Ideas:</b><br><br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>L-click</b> to highlight what\'s connected<br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>L-click</b> to view/edit its profile<br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>Duplicate Ideas</b> (created by >1 user) have a border<br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>L-click duplicate Ideas</b> to view profiles in Idea List<br><br>';
$LNG->HELP_NETWORKMAP_BODY .= '<b>Connections:</b><br><br>&nbsp;&nbsp;&nbsp;';
$LNG->HELP_NETWORKMAP_BODY .= '<b>Mouse over blobs</b> to view an Idea\'s<br>&nbsp;&nbsp;&nbsp;';

/** CORE **/
$LNG->CORE_UNKNOWN_USER_ERROR = 'User unknown';
$LNG->CORE_NOT_IMAGE_ERROR = 'Sorry you can only upload images.';
$LNG->CORE_NOT_IMAGE_TOO_LARGE_ERROR = 'Sorry image file is too large.';
$LNG->CORE_NOT_IMAGE_UPLOAD_ERROR = 'An error occured uploading the image';
$LNG->CORE_NOT_IMAGE_RESIZE_ERROR = 'Error resizing image';
$LNG->CORE_NOT_IMAGE_SCALE_ERROR = 'Error scaling image.';

$LNG->CORE_SESSION_OK = 'OK';
$LNG->CORE_SESSION_INVALID = 'Session Invalid';

$LNG->CORE_AUDIT_NOT_XML_ERROR = 'Not a valid XML file';
$LNG->CORE_AUDIT_CONNECTION_NOT_FOUND_ERROR = 'Connection not found';
$LNG->CORE_AUDIT_NODE_NOT_FOUND_ERROR = 'Node not found';
$LNG->CORE_AUDIT_URL_NOT_FOUND_ERROR = 'URL not found';
$LNG->CORE_AUDIT_CONNECTION_ID_MISSING_ERROR = 'Connection id data missing - data could not be loaded';
$LNG->CORE_AUDIT_CONNECTION_DATA_MISSING_ERROR = 'Connection data missing';
$LNG->CORE_AUDIT_NODE_ID_MISSING_ERROR = 'Node id data missing - node could not be loaded';
$LNG->CORE_AUDIT_NODE_DATA_MISSING_ERROR = 'Node data missing';
$LNG->CORE_AUDIT_URL_ID_MISSING_ERROR = 'Url id data missing - url could not be loaded';
$LNG->CORE_AUDIT_URL_DATA_MISSING_ERROR = 'Url data missing';
$LNG->CORE_AUDIT_TAG_ID_MISSING_ERROR = 'Tag id data missing - Tag could not be loaded';
$LNG->CORE_AUDIT_TAG_DATA_MISSING_ERROR = 'Tag data missing';
$LNG->CORE_AUDIT_USER_ID_MISSING_ERROR = 'User id data missing - user could not be loaded';
$LNG->CORE_AUDIT_USER_DATA_MISSING_ERROR = 'User data missing';
$LNG->CORE_AUDIT_GROUP_ID_MISSING_ERROR = 'Group id data missing - Group could not be loaded';
$LNG->CORE_AUDIT_GROUP_DATA_MISSING_ERROR = 'Group data missing';
$LNG->CORE_AUDIT_ROLE_ID_MISSING_ERROR = 'Node Type id data missing - Node Type could not be loaded';
$LNG->CORE_AUDIT_ROLE_DATA_MISSING_ERROR = 'Node Type data missing';
$LNG->CORE_AUDIT_LINK_ID_MISSING_ERROR = 'Linktype id data missing - Link Type could not be loaded';
$LNG->CORE_AUDIT_LINK_DATA_MISSING_ERROR = 'Link Type data missing';

$LNG->CORE_FORMAT_NOT_IMPLEMENTED_MESSAGE = 'Not yet implemented';
$LNG->CORE_FORMAT_INVALID_SELECTION_ERROR = 'Invalid format selection';

$LNG->CORE_HELP_ERRORCODES_TITLE = 'Help - API Error codes';
$LNG->CORE_HELP_ERRORCODES_CODE_HEADING = 'Code';
$LNG->CORE_HELP_ERRORCODES_MEANING_HEADING = 'Meaning';

$LNG->CORE_DATAMODEL_GROUP_CANNOT_REMOVE_MEMBER = 'Cannot remove user as admin as group will have no admins';

/**
 * THESE ARE ERROR MESSAGE SENT FROM THE API CODE CODE
 * YOU MAY CHOOSE NOT TO TRANSLATE THESE
 */
$LNG->ERROR_REQUIRED_PARAMETER_MISSING_MESSAGE = "Required parameter missing";
$LNG->ERROR_INVALID_METHOD_SPECIFIED_MESSAGE = "Invalid or no method specified";
$LNG->ERROR_INVALID_ORDERBY_MESSAGE = "Invalid order by selection";
$LNG->ERROR_INVALID_SORT_MESSAGE = "Invalid sort selection";
$LNG->ERROR_BLANK_NODEID_MESSAGE = "The item id cannot be blank.";
$LNG->ERROR_ACCESS_DENIED_MESSAGE = "Access denied";
$LNG->ERROR_LOGIN_FAILED_MESSAGE = "Sign In failed: Your email or password are wrong. Please try again.";
$LNG->ERROR_LOGIN_FAILED_SUSPENDED_MESSAGE = "Sign In failed: This account has been suspended";
$LNG->ERROR_LOGIN_FAILED_UNVALIDATED_MESSAGE = "Sign In failed: This account has not completed the registration process by having its Email address validated.";
$LNG->ERROR_LOGIN_FAILED_EXTERNAL_MESSAGE = "The account with the given email address was created with an external service and does not have a local password.<br>You must sign in to this account using:";

$LNG->ERROR_INVALID_JSON_ERROR_NONE = "No JSON errors";
$LNG->ERROR_INVALID_JSON_ERROR_DEPTH = "Maximum stack depth exceeded in the JSON";
$LNG->ERROR_INVALID_JSON_ERROR_STATE_MISMATCH = "Underflow or the modes mismatch";
$LNG->ERROR_INVALID_JSON_ERROR_CTRL_CHAR = "Unexpected control character found in the JSON";
$LNG->ERROR_INVALID_JSON_ERROR_SYNTAX = "Syntax error, malformed JSON";
$LNG->ERROR_INVALID_JSON_ERROR_UTF8 = "Malformed UTF-8 characters, possibly incorrectly encoded";
$LNG->ERROR_INVALID_JSON_ERROR_DEFAULT = "An unknown error has occurred decoding the JSON";

$LNG->ERROR_INVALID_METHOD_FOR_TYPE_MESSAGE = "Method not allowed for this format type";
$LNG->ERROR_DUPLICATION_MESSAGE = "Duplication Error";
$LNG->ERROR_INVALID_EMAIL_FORMAT_MESSAGE = "Invalid email format";
$LNG->ERROR_DATABASE_MESSAGE = "Database error";
$LNG->ERROR_USER_NOT_FOUND_MESSAGE = 'User not found in database';
$LNG->ERROR_URL_NOT_FOUND_MESSAGE = 'Url not found in database';
$LNG->ERROR_TAG_NOT_FOUND_MESSAGE = 'Tag not found in database';
$LNG->ERROR_ROLE_NOT_FOUND_MESSAGE = 'Node Type (Role) not found in database';
$LNG->ERROR_LINKTYPE_NOT_FOUND_MESSAGE = 'Link Type not found in database';
$LNG->ERROR_NODE_NOT_FOUND_MESSAGE = 'Node not found in database';
$LNG->ERROR_CONNECTION_NOT_FOUND_MESSAGE = 'Connection not found in database';
$LNG->ERROR_INVALID_CONNECTION_MESSAGE = "Invalid connection combination. Does not match the datamodel.";
$LNG->ERROR_INVALID_PARAMETER_TYPE_MESSAGE = "Invalid parameter type";

/** NEW USER HOME PAGE ARRANGEMENT **/
$LNG->TAB_USER_DATA = 'My Data';
$LNG->TAB_USER_GROUP = 'My '.$LNG->GROUPS_NAME;
$LNG->TAB_USER_SOCIAL = 'My Social Network';

/** SPAM REPORTING **/
$LNG->SPAM_CONFIRM_MESSAGE_PART1= 'Are you sure you want to report';
$LNG->SPAM_CONFIRM_MESSAGE_PART2= 'as Spam / Inappropriate?';
$LNG->SPAM_SUCCESS_MESSAGE = 'has been reported as spam';
$LNG->SPAM_REPORTED_TEXT = 'Reported as Spam';
$LNG->SPAM_REPORTED_HINT = 'This has been reported as Spam / Inappropriate content';
$LNG->SPAM_REPORT_TEXT = 'Report as Spam';
$LNG->SPAM_REPORT_HINT = 'Report this as Spam / Inappropriate content';
$LNG->SPAM_LOGIN_REPORT_TEXT = 'Sign In to Report as Spam';
$LNG->SPAM_LOGIN_REPORT_HINT = 'Sign In to Report this as Spam / Inappropriate content';
$LNG->SPAM_ADMIN_MANAGER_SPAM_LINK = "Reported Items";
$LNG->SPAM_ADMIN_TITLE = "Item Report Manager";
$LNG->SPAM_ADMIN_ID_ERROR = "Can not process request as nodeid is missing";
$LNG->SPAM_ADMIN_TABLE_HEADING0 = "Reported By";
$LNG->SPAM_ADMIN_TABLE_HEADING1 = "Title";
$LNG->SPAM_ADMIN_TABLE_HEADING2 = "Action";
$LNG->SPAM_ADMIN_DELETE_CHECK_MESSAGE = "Are you sure you want to delete the item?: ";
$LNG->SPAM_ADMIN_RESTORE_CHECK_MESSAGE = "Are you sure you want to set as NOT SPAM?: ";
$LNG->SPAM_ADMIN_RESTORE_BUTTON = "Not Spam";
$LNG->SPAM_ADMIN_DELETE_BUTTON = "Delete";
$LNG->SPAM_ADMIN_VIEW_BUTTON = "View Details";
$LNG->SPAM_ADMIN_NONE_MESSAGE = 'There are currently no items reported as Spam / Inappropriate';

$LNG->SPAM_USER_REPORTED = 'User has been reported as a Spammer / Inappropriate';
$LNG->SPAM_USER_REPORT = 'Report this User as a Spammer / Inappropriate';
$LNG->SPAM_USER_LOGIN_REPORT = 'Login to report this User or Group as Spam / Inappropriate';
$LNG->SPAM_USER_REPORTED_ALT = 'Reported';
$LNG->SPAM_USER_REPORT_ALT = 'Report';
$LNG->SPAM_USER_LOGIN_REPORT_ALT = 'Login to Report';
$LNG->SPAM_USER_ADMIN_TABLE_HEADING0 = "Reported By";
$LNG->SPAM_USER_ADMIN_TABLE_HEADING1 = "User Name";
$LNG->SPAM_USER_ADMIN_TABLE_HEADING2 = "Action";
$LNG->SPAM_USER_ADMIN_VIEW_BUTTON = "View User Home";
$LNG->SPAM_USER_ADMIN_VIEW_HINT = "Open a new Window showing this user's home page";
$LNG->SPAM_USER_ADMIN_RESTORE_BUTTON = "Restore Account";
$LNG->SPAM_USER_ADMIN_RESTORE_HINT = "Restore this user account to active";
$LNG->SPAM_USER_ADMIN_DELETE_BUTTON = "Delete Account";
$LNG->SPAM_USER_ADMIN_DELETE_HINT = "Delete this user account and all their data";
$LNG->SPAM_USER_ADMIN_SUSPEND_BUTTON = "Suspend Account";
$LNG->SPAM_USER_ADMIN_SUSPEND_HINT = "Suspend this user account and prevent them signing in";
$LNG->SPAM_USER_ADMIN_DELETE_CHECK_MESSAGE_PART1 = "Are you sure you want to delete the user: ";
$LNG->SPAM_USER_ADMIN_DELETE_CHECK_MESSAGE_PART2 = "Be warned: all their data will be permanently deleted. If you have not done so, you should check their contributions first by clicking '".$LNG->SPAM_USER_ADMIN_VIEW_BUTTON."'";;
$LNG->SPAM_USER_ADMIN_RESTORE_CHECK_MESSAGE_PART1 = "Are you sure you want to restore the account of: ";
$LNG->SPAM_USER_ADMIN_RESTORE_CHECK_MESSAGE_PART2 = "This will remove this user from this list";
$LNG->SPAM_USER_ADMIN_SUSPEND_CHECK_MESSAGE = "Are you sure you want to suspend the account of: ";
$LNG->SPAM_USER_ADMIN_NONE_MESSAGE = 'There are currently no users reported as Spammers / Inappropriate';
$LNG->SPAM_USER_ADMIN_TITLE = "User Report Manager";
$LNG->SPAM_USER_ADMIN_MANAGER_SPAM_LINK = "Reported Users";
$LNG->SPAM_USER_ADMIN_ID_ERROR = "Can not process request as userid is missing";
$LNG->SPAM_USER_ADMIN_NONE_SUSPENDED_MESSAGE = 'There are currently no users suspended';
$LNG->SPAM_USER_ADMIN_SPAM_TITLE = 'Users Reported';
$LNG->SPAM_USER_ADMIN_SUSPENDED_TITLE = 'Users Suspended';

/** EXTERNAL LOGIN **/
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_0 = 'Unspecified error.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_1 = 'Hybriauth configuration error.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_2 = 'Provider not properly configured.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_3 = 'Unknown or disabled provider.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_4 = 'Missing provider application credentials.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_5 = 'Authentication failed. The user has canceled the authentication or the provider refused the connection.';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_6 = 'User profile request failed. Most likely the user is not connected to the provider and he should try to authenticate again';
$LNG->LOGIN_EXTERNAL_ERROR_HYBRIDAUTH_7 = 'User not connected to the provider.';

$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_UNVALIDATED = 'An Debate Hub user account already exists on this site using the email address from your external profile, but that user account has not completed the registration process.<br>If you own that user account you need to reply to the email you where sent to complete your registration, before you can Sign In.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_UNVALIDATED_EXISTING = 'An Debate Hub user account already exists on this site using the email address from your external profile, but that Debate Hub user account has not had the email address verify yet.<br><br>If you own that Debate Hub user account you first need to <a href="'.$CFG->homeAddress.'ui/pages/login.php">Sign In</a> using that account and verify your email address from your profile page, before you can use any external services to Sign In to this Hub in the future.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_UNAUTHORIZED = 'An Debate Hub user account already exists using the email address from your external profile, however that account is awaiting authorization, so we cannot log you in at this time.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_SUSPENDED = 'An Debate Hub user account already exists on this site using the email address on your external profile, however the account has currently been suspended, so we cannot log you in at this time.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_PROVIDER_UNVALIDATED = 'It seems you have tried to sign in with'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_PROVIDER_UNVALIDATED_PART2 = 'before but did not complete the email validation required.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_PROVIDER_UNVALIDATED_PART2 .= '<br><br>Please respond to the email you where sent, before you try to Sign In with this service again.';
$LNG->LOGIN_EXTERNAL_ERROR_ACCOUNT_PROVIDER_UNVALIDATED_PART2 .= '<br><br>Alternatively, request another validation email by clicking the button below.';
$LNG->LOGIN_EXTERNAL_ERROR_USER_LOAD_FAILED = 'Failed to load user acount: ';
$LNG->LOGIN_EXTERNAL_ERROR_REGISTRATION_CLOSED = "Based on the email address given we can see that you do not have an account with us yet.<br><br>Unfortunately registration on this site is currently by invitation only.";
$LNG->LOGIN_EXTERNAL_ERROR_REQUIRES_AUTHORISATION = 'Based on the email address given we can see that you do not have an account with us yet.<br><br>This Debate Hub currently requires registration requests to be authorised.<br>So please go to the <a href="'.$CFG->homeAddress.'ui/pages/registerrequest.php">Sign Up</a> page and complete the registration request form.';

$LNG->LOGIN_EXTERNAL_FIRST_TIME = 'We can see that this is the first time you have tried to sign in to this site using'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_ERROR_EMAIL_UNVALIDATED_PART1 = '<br><br>Unfortunately the email address on the profile information they hold on you has not been verified by them. So before we can associated this external profile to an account in our Hub we need to validate the email address.<br><br>Therefore you have now been sent an email. Please click on the link in the email to complete the registration of your'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_ERROR_EMAIL_UNVALIDATED_PART2 = 'profile on this Hub.';

$LNG->LOGIN_EXTERNAL_ERROR_NO_EMAIL_PART1 = '<br><br>Unfortunately'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_ERROR_NO_EMAIL_PART2 = 'has not given us your email address, so we cannot check if you have an account with us already or create a new one if required.<br><br>Therefore, please enter the Email address you wish to use on this Debate Hub below and press Login.';

$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE .= 'You will shortly receive an email.';
$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE .= '<br>You must click on the link inside to complete your registration on this Hub.';

$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE2 = 'There was no existing Hub user account for the email address on your external profile, so we have now created one and associated it to that external profile.';
$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE2 .= '<br>However, the email address has not been validated by the external service provider, so before we can complete your registration we must first validate that email address belongs to you.';
$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE2 .= '<br><br>'.$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE;

$LNG->LOGIN_EXTERNAL_TITLE = 'Social Sign On';

$LNG->LOGIN_EXTERNAL_COMPLETE_TITLE = 'SOCIAL SIGN ON - Completing Email Validation';
$LNG->LOGIN_EXTERNAL_COMPLETE_FAILED = 'The Social sign on record associated with the given id is no longer available. Please try Signing Up/In again';
$LNG->LOGIN_EXTERNAL_COMPLETE_FAILED = 'Your email validation could not be completed as the record id given was invalid. Please try Signing Up/In again';
$LNG->LOGIN_EXTERNAL_COMPLETE_FAILED_USER = 'The existing User account that is associated with the given email address is no longer available';
$LNG->LOGIN_EXTERNAL_COMPLETE_FAILED_INVALID = 'Your email validation could not be completed as the validation key given was invalid for the given external provider record id. <br><br>Please try again using a different provider, or create a local Debate Hub account';
$LNG->LOGIN_EXTERNAL_REGISTER_COMPLETE_FAILED = 'Your registration could not be completed as the user id given did not belong to the external provider record given.<br><br>Please try again using a different provider, or create a local Debate Hub account';

// Messages used when the provider didn't supply the email address so the user was asked to
$LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS = 'An LiteMap user account already exists on this site using the email address you have given us';

$LNG->LOGIN_EXTERNAL_UNVALIDATED_TITLE = 'Validate Your Debate Hub Email Address';


$LNG->LOGIN_EXTERNAL_NO_EMAIL_ERROR_ACCOUNT_UNVALIDATED = $LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS.', but that user account has not completed its registration process.<br><br>If you own that Debate Hub user account you need to reply to the email you where sent to complete your registration, before you can use any external services to Sign In to this Hub.';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_ERROR_ACCOUNT_UNVALIDATED_EXISTING = $LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS.', but that Debate Hub user account has not had its email address validated yet.<br><br>If you own that Debate Hub user account you first need to <a href="'.$CFG->homeAddress.'ui/pages/login.php">Sign In</a> using that account and validate your email address from your profile page, before you can use any external services to Sign In to this Hub in the future.';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_ERROR_ACCOUNT_UNAUTHORIZED = $LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS.', however that account is awaiting authorization, so we cannot log you in at this time.';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_ERROR_ACCOUNT_SUSPENDED = $LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS.', however the account has currently been suspended, so we cannot log you in at this time.';

$LNG->LOGIN_EXTERNAL_NO_EMAIL_EXISTING_VALIDATE_TITLE_PART1 = 'Validate Your';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_EXISTING_VALIDATE_TITLE_PART2 = 'Email Address';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_EXISTING_VALIDATE_MESSAGE_PART1 = $LNG->LOGIN_EXTERNAL_NO_EMAIL_ACCOUNT_EXISTS.'. In order for us to associate your'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_NO_EMAIL_EXISTING_VALIDATE_MESSAGE_PART2 = 'account with this Debate Hub user account we first need to validate that you are the owner of the email address you have given us.<br><br>Therefore we have sent you an email. Please click on the link inside to validate your email address and complete the registration of your external profile with us.';

$LNG->LOGIN_EXTERNAL_NO_EMAIL_VERIFICALTION_TITLE = 'Registration Successful';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_VERIFICALTION_MESSAGE_PART1 = 'There was no existing Debate Hub user account for the email address you have given us, so we have now created one and associated it to your'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_NO_EMAIL_VERIFICALTION_MESSAGE_PART2 = 'profile.';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_VERIFICALTION_MESSAGE_PART3 = '<br>However, to complete your registration with us we must first validate that you are the owner of the email address you have given us.';
$LNG->LOGIN_EXTERNAL_NO_EMAIL_VERIFICALTION_MESSAGE_PART3 .= '<br><br>'.$LNG->LOGIN_EXTERNAL_EMAIL_VERIFICALTION_MESSAGE;

$LNG->LOGIN_EXTERNAL_WELCOME_TITLE = 'Welcome to the Debate Hub';
$LNG->LOGIN_EXTERNAL_WELCOME_MESSAGE_PART1 = 'There was no existing Debate Hub user account for the email address:';
$LNG->LOGIN_EXTERNAL_WELCOME_MESSAGE_PART2 = ', so we have now created one and associated it to your'; // Provder service name will be inserted here .e.g Facebook, Yahoo, Google etc.
$LNG->LOGIN_EXTERNAL_WELCOME_MESSAGE_PART3 = 'profile.';
$LNG->LOGIN_EXTERNAL_WELCOME_MESSAGE_PART4 = 'You should receive a welcome email shortly.';

$LNG->LOGIN_EXTERNAL_ENTER_BUTTON = 'Enter Site';

/** NEW LOGIN ADDITIONS **/
$LNG->VALIDATION_COMPLETE_TITLE = 'Email Address Validation';
$LNG->VALIDATION_FAILED = 'Your email address validation could not be completed. Please try again';
$LNG->VALIDATION_FAILED_INVALID = 'Your email address validation could not be completed as the Validation key was invalid for the given user. Please try again';
$LNG->VALIDATION_SUCCESSFUL_LOGIN = "Thank you for validating your email address with us.</a>";

$LNG->EMAIL_VALIDATE_TEXT = 'Send New Validation Email';
$LNG->EMAIL_VALIDATE_HINT = 'Click here to be sent another validation email for you to complete your registration of this external profile with us.';
$LNG->EMAIL_VALIDATE_MESSAGE = 'You have been sent an email to validate that you own the email address you tried to Sign In with.';

/** ADMIN USER REGISTRATION MANAGER **/
$LNG->REGSITRATION_ADMIN_MANAGER_LINK = "Registration Requests";
$LNG->REGSITRATION_ADMIN_TITLE = 'User Registration Manager';

$LNG->REGSITRATION_ADMIN_UNREGISTERED_TITLE = "Registration Requests";
$LNG->REGSITRATION_ADMIN_UNVALIDATED_TITLE = "Unvalidated Registrations";
$LNG->REGSITRATION_ADMIN_REVALIDATE_BUTTON = "Revalidate";
$LNG->REGSITRATION_ADMIN_REMOVE_BUTTON = "Remove";
$LNG->REGSITRATION_ADMIN_REMOVE_CHECK_MESSAGE = "Are you sure you want to REMOVE this user registration?: ";
$LNG->REGSITRATION_ADMIN_REVALIDATE_CHECK_MESSAGE = "Are you sure you want to send another validation email to this user?: ";
$LNG->REGSITRATION_ADMIN_USER_REMOVED = 'has had their acount removed from the system';
$LNG->REGSITRATION_ADMIN_USER_EMAILED_REVALIDATED = 'has been re-emailed that their registration request was accepted';

$LNG->REGSITRATION_ADMIN_REJECT_CHECK_MESSAGE = "Are you sure you want to REJECT this user registration request?: ";
$LNG->REGSITRATION_ADMIN_ACCEPT_CHECK_MESSAGE = "Are you sure you want to ACCEPT this user registration request?: ";
$LNG->REGSITRATION_ADMIN_NONE_MESSAGE = 'There are currently no users requesting registration';
$LNG->REGSITRATION_ADMIN_VALIDATION_NONE_MESSAGE = 'There are currently no users awaiting validation';
$LNG->REGSITRATION_ADMIN_TABLE_HEADING_NAME = "Nom";
$LNG->REGSITRATION_ADMIN_TABLE_HEADING_DESC = "Description";
$LNG->REGSITRATION_ADMIN_TABLE_HEADING_INTEREST = "Interest";
$LNG->REGSITRATION_ADMIN_TABLE_HEADING_WEBSITE = "website";
$LNG->REGSITRATION_ADMIN_TABLE_HEADING_ACTION = "Action";
$LNG->REGSITRATION_ADMIN_REJECT_BUTTON = 'Reject';
$LNG->REGSITRATION_ADMIN_ACCEPT_BUTTON = 'Accept';
$LNG->REGSITRATION_ADMIN_ID_ERROR = "Can not process user request as userid is missing";
$LNG->REGSITRATION_ADMIN_USER_EMAILED_ACCEPTANCE = 'has been emailed that their registration request was accepted';
$LNG->REGSITRATION_ADMIN_USER_EMAILED_REJECTION = 'has been emailed that their registration request was rejected';
$LNG->REGSITRATION_ADMIN_EMAIL_REQUEST_SUBJECT = $LNG->WELCOME_REGISTER_REQUEST_SUBJECT;

// %s will be replace with the name of the current Debate Hub. When translating please leave this in the sentence appropariately placed.
$LNG->REGSITRATION_ADMIN_EMAIL_REJECT_BODY = 'Thank you for requesting registration on the %s.<br>Unfortunately, on this occasion, your request for a user account has not been successful.';

$LNG->RECENT_EMAIL_DIGEST_LABEL = 'Email Digest:';
$LNG->RECENT_EMAIL_DIGEST_REGISTER_MESSAGE = "Tick to receive a monthly email digest of recent activity.";
$LNG->RECENT_EMAIL_DIGEST_PROFILE_MESSAGE = "Opt in/out of receiving a monthly email digest of recent activity.";
?>