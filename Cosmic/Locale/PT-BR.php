<?php
use App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Home',

            'nav_community'         => 'Comunidade',
            'nav_news'              => 'Noticias',
            'nav_jobs'              => 'Trabalhos',
            'nav_photos'            => 'Galeria',
            'nav_staff'             => 'Equipe',
            'nav_team'              => 'Colaboradores',
            'nav_exchange'          => 'Loja',

            'nav_shop'              => 'Loja',
            'nav_buy_points'        => 'Raros',
            'nav_buy_club'          => 'Comprar Vip ',
            'nav_purchasehistory'   => 'Histórico de Compras',
            'nav_changename'        => 'Trocar Nick',
            'nav_drawyourbadge'     => 'Desenhe seu emblema',
          
            'nav_highscores'        => 'Hall da Fama',

            'nav_forum'             => 'Meus Grupos',

            'nav_helptool'          => 'Ferramenta de Ajuda',
            'nav_helptickets'       => 'Tickets',

            'nav_housekeeping'      => 'Housekeeping',

            'close'                 => 'Fechar',
            'cookies'               => 'usa cookies próprios e de terceiros para fornecer um serviço melhor e também garante que os anúncios correspondam melhor às suas preferências. Se você usa nosso site, concorda com nossa política de cookies.',
            'read_more'             => 'Consulte Mais informação',
            'thanks_for_playing'    => 'Obrigado por jogar',
            'made_with_love'        => 'foi feito com muito amor',
            'credits'               => 'Graças a Raizer e Metus',
            'and_all'               => 'E tudos os apoiadores',

            'login_name'            => 'Nick',
            'login_password'        => 'Senha',
            'login_save_data'       => 'Lembre de mim',
            'login_lost_password'   => 'Perdeu sua senha?',

            'report_message'        => 'Denunciar esta mensagem',
            'report_certainty'      => 'Você está prestes a relatar esta mensagem. Você tem certeza que quer denunciar esta mensagem?',
            'report_inappropriate'  => 'Sim, isso é inapropriado!',

            'user_to'               => 'Entrar',
            'user_profile'          => 'Meu Perfil',
            'user_settings'         => 'Configurações',
            'user_logout'           => 'Sair',

            'header_slogan'         => 'Mundo virtual para jovens!',
            'header_slogan2'        => 'Junte-se à nossa comunidade e faça novos amigos',
            'header_login'          => 'Logar',
            'header_register'       => 'Cadastre-se gratuitamente!',
            'header_to'             => 'Entrar',

            'footer_helptool'       => 'Ferramenta de Ajuda',
            'footer_rules'          => 'The ' . Config::site['shortname'] . ' Rules',
            'footer_terms'          => 'Termos e Condições',
            'footer_privacy'        => 'Declaração de privacidade',
            'footer_cookies'        => 'Política de Cookies',
            'footer_guide'          => 'Guia de pais'
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Todos os campos marcados com * são obrigatórios.',
            'web_customforms_loadingform'                   => 'Carregando formulário...',
            'web_customforms_next'                          => 'Próximo',
            'web_customforms_close'                         => 'Fechar',
            'web_customforms_participation'                 => 'Obrigado pela sua participação!',
            'web_customforms_sent'                          => 'Suas respostas foram enviadas e serão analisadas por quem inicia este formulário.',
            'web_customforms_answer'                        => 'Sua resposta',

            'web_dialog_cancel'                             => 'Cancelar',
            'web_dialog_validate'                           => 'Validar',
            'web_dialog_confirm'                            => 'Confirme sua escolha',

            'web_hotel_backto'                              => 'Voltar ' . Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Digite o código PIN que você especificou ao criar a segurança extra em sua conta. Bem, eu esqueci este? Então entre em contato conosco através do ' . Config::site['shortname'] . ' Ferramenta de Ajuda',
            'web_twostep'                                   => 'Autorização de duas etapas!',
            'web_login'                                     => 'Você deve estar logado para reportar esta mensagem!',
            'web_loggedout'                                 => 'Desconectado :(',

            'web_notifications_success'                     => 'Sucesso!',
            'web_notifications_error'                       => 'Erro!',
            'web_notifications_info'                        => 'Em formação!',

            'web_page_article_login'                        => 'Você precisa estar logado para postar um comentário!',

            'web_page_community_photos_login'               => 'Você deve estar logado para curtir fotos!',
            'web_page_community_photos_loggedout'           => 'Desconectado :(',

            'web_page_forum_change'                         => 'Trocar',
            'web_page_forum_cancel'                         => 'Cancelar',
            'web_page_forum_oops'                           => 'Oops...',
            'web_page_forum_topic_closed'                   => 'Este tópico está fechado e você não pode mais responder.',
            'web_page_forum_login_toreact'                  => 'Para responder, você precisa estar logado!',
            'web_page_forum_login_tolike'                   => 'Você deve estar logado para curtir esta postagem!',
            'web_page_forum_loggedout'                      => 'Desconectado :(',

            'web_page_profile_login'                        => 'Você deve estar logado para curtir fotos!',
            'web_page_profile_loggedout'                    => 'Desconectado :(',

            'web_page_settings_namechange_request'          => 'Solicitação',
            'web_page_settings_namechange_not_available'    => 'Não disponível',
            'web_page_settings_namechange_choose_name'      => 'Escolha o nick',

            'web_page_settings_verification_oops'           => 'Oops...',
            'web_page_settings_verification_fill_password'  => 'Coloque sua senha!',
            'web_page_settings_verification_2fa_on'         => 'A autenticação do Google está atualmente configurada em sua conta. Para usar outro método de verificação, você deve primeiro remover sua verificação antiga!',
            'web_page_settings_verification_2fa_secretkey'  => 'Você leu o código QR no seu celular? Em seguida, insira a chave secreta para confirmar sua conta!',
            'web_page_settings_verification_2fa_authcode'   => 'Código de Autenticação',
            'web_page_settings_verification_pincode_on'     => 'Atualmente, você tem um código PIN definido em sua conta. Para usar outro método de verificação, você primeiro deve remover sua verificação antiga!',
            'web_page_settings_verification_2fa_off'        => 'Para desativar a autenticação do Google, pedimos que você insira o código secreto do gerador.',
            'web_page_settings_verification_pincode_off'    => 'Para desativar a autenticação do código PIN, pedimos que você insira o código PIN.',
            'web_page_settings_verification_pincode'        => 'Pincode code',
            'web_page_settings_verification_switch'         => 'Selecione o botão alternar para habilitar um método de autenticação!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Pague facilmente com Paypal e seus pontos GOTW serão recarregados imediatamente.',
            'web_page_shop_offers_neosurf_dialog'           => 'Digite seu endereço de e-mail Paypal abaixo para continuar.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Pague facilmente com Paypal e seus pontos GOTW serão recarregados imediatamente.',
            'web_page_shop_offers_paypal_dialog'            => 'Digite seu endereço de e-mail Paypal abaixo para continuar.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Envie um código por SMS e receba um código de pontos GOTW.',
            'web_page_shop_offers_sms_dialog'               => 'Envie o código abaixo em um SMS para obter um código de pontos GOTW.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Ligue para um número uma ou mais vezes para obter um código de pontos GOTW.',
            'web_page_shop_offers_audiotel_dialog'          => 'Ligue para o número abaixo para obter um código de pontos GOTW.',
            'web_page_shop_offers_pay_with'                 => 'Pagar com',
            'web_page_shop_offers_points_for'               => 'GOTW-Points para',
            'web_page_shop_offers_get_code'                 => 'Obtenha um código de pontos GOTW',
            'web_page_shop_offers_fill_code'                => 'Insira seu código de pontos GOTW',
            'web_page_shop_offers_fill_code_desc'           => 'Insira o código dos seus pontos GOTW abaixo para receber seus pontos GOTW.',
            'web_page_shop_offers_submit'                   => 'Enviar',
            'web_page_shop_offers_success'                  => 'Compra bem sucedida!',
            'web_page_shop_offers_received'                 => 'Obrigado por sua compra. Você tem',
            'web_page_shop_offers_received2'                => 'GOTW-Points.',
            'web_page_shop_offers_close'                    => 'Fechar',
            'web_page_shop_offers_failed'                   => 'A compra falhou!',
            'web_page_shop_offers_failed_desc'              => 'A compra falhou. Tente novamente ou entre em contato por meio da Ferramenta de Ajuda.',
            'web_page_shop_offers_back'                     => 'Voltar',
            'web_page_shop_offers_no_card'                  => 'Se você não possui um cartão pré-pago Neosurf, você pode ver o',
            'web_page_shop_offers_no_card2'                 => 'pontos de venda',
            'web_page_shop_offers_to'                       => '15',
            'web_page_shop_offers_buy_code'                 => 'Código de acesso de compra',
            'web_page_hotel_loading'                        => 'agora está carregando...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Oops, há algo errado!.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Recarregue a página',
            'web_page_hotel_sometinhg_wrong_3'              => 'Ou crie um tíquete na ferramenta de ajuda',
            'web_page_hotel_welcome_at'                     => 'Bem vindo em',
            'web_page_hotel_soon'                           => 'Pegue uma bebida, estaremos aí em breve...',
            'web_hotel_active_flash_1'                      => 'Você está quase dentro do ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Clique aqui',
            'web_hotel_active_flash_3'                      => 'e clique no lado esquerdo em "permitir" flash, para habilitar o flash.',
            
        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'Comentários',
            'reactions_empty'           => 'Ainda não há comentários.',
            'reactions_fill'            => 'Digite sua mensagem aqui...',
            'reactions_post'            => 'Postar',
            'latest_news'               => 'Últimas notícias',
            'reaction_hidden_yes'       => 'Comentários de notícias invisíveis!',
            'reaction_hidden_no'        => 'Comentários de notícias tornados visíveis!',
            'forbidden_words'           => 'Sua mensagem contém palavras proibidas!',
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_subject'             => 'Assuntos',
            'index_topics'              => 'Tópicos',
            'index_latest_topic'        => 'Último tópico',
            'index_empty'               => 'Sem tópicos',
            'index_latest_activities'   => 'Últimas atividades',
            'index_by'                  => 'by',

          /*  Forum/category.html  */
            'category_new_topic'        => 'Novo topico',
            'category_back'             => 'Voltar',
            'category_topics'           => 'TTópicos',
            'category_posts'            => 'Postar',
            'category_latest_reacts'    => 'Últimas reações',
            'category_topic_by'         => 'By',
            'category_no_reacts'        => 'Sem reações',
            'category_latest_react_by'  => 'Última reação de',
            'category_create_topic'     => 'Crie um novo tópico',
            'category_subject'          => 'Sujeito',
            'category_description'      => 'Descrição',
            'category_create_button'    => 'Criar tópico',
            'category_or'               => 'ou',
            'category_cancel'           => 'cancelar',

          /*  Forum/topic.html  */
            'topic_react'               => 'Reagir',
            'topic_close'               => 'Fechar',
            'topic_reopen'              => 'Reabrir',
            'topic_since'               => 'Desde a:',
            'topic_posts'               => 'Postagens:',
            'topic_topic'               => 'Tema:',
            'topic_reaction'            => 'Reação:',
            'topic_closed'              => 'Preste atenção! Este tópico está fechado, você discorda? Então entre em contato conosco através do',
            'topic_helptool'            => 'ferramenta de ajuda',
            'topic_and'                 => 'e',
            'topic_likes_1'             => 'outros gostam disso!',
            'topic_likes_2'             => 'gosta disso!',
            'topic_likes_3'             => 'como isso!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => 'by',
            'photos_by'   => 'Fotos de',
            'photos_desc' => 'Veja todas as últimas fotos tiradas por',
            'load_more'   => 'Veja mais fotos'
        ),
        'community_staff' => array (
            'title'       => 'Como faço para me tornar funcionário da ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Nossa equipe está aqui para ajudar e orientar você neste hotel!',
            'content_1'   => 'Claro que todos sonham em ser funcionários da ' . Config::site['shortname'] . ' , mas infelizmente isso não é para todos. Para se tornar funcionário da ' . Config::site['shortname'] . '  você deve aplicar.',
            'content_2'   => 'Isso só é possível nos momentos que temos vagas, quando temos isso, isso é comentado no noticiário.'
        ),
        'community_value' => array (
            'title_header'      => 'Mercado de catálogo',
            'decs_header'       => 'Todos os móveis exclusivos com valor superior aos créditos você pode adquirir aqui!',
            'furni_name'        => 'Furniname',
            'furni_type'        => 'Tipo',
            'furni_costs'       => 'Agora',
            'furni_amount'      => 'No jogo',
            'furni_value'       => 'Preço antigo',
            'furni_rate'        => 'Taxa',
            'looking_for'       => 'Estou procurando por..',
            'seller'            => 'Vendedor',
            'price'             => 'Preço',
            'nav_my'            => 'Meu mercado',
            'nav_shop'          => 'Mercado',
            'nav_catalogue'     => 'Catálogo',
            'marketplace_desc'  => 'Vendedores de ' . Config::site['shortname'] . ' hotel oferece suas coisas aqui que você pode pagar com suas moedas. Talvez você encontre aqui itens exclusivos que você normalmente não pode comprar em nosso catálogo!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ',
            'help_label'                => 'Encontre todas as respostas sobre suas perguntas aqui!',
            'help_other_questions'      => 'Outras perguntas',
            'help_content_1'            => 'Não encontrou a resposta para sua pergunta? Não hesite em contactar o nosso serviço de apoio ao cliente para que possamos fornecer mais informações.',
            'help_contact'              => 'Contato',
            'title'                     => 'Ferramenta de Ajuda',
            'desc'                      => 'Você pode pesquisar aqui as respostas às suas perguntas. Se você não conseguir encontrar a resposta para sua pergunta, envie uma solicitação.',

          /*  Help/request.html  */
            'request_closed'            => 'FECHADOS',
            'request_on'                => 'Em:',
            'request_ticket_amount'     => 'Quantidade de ingressos:',
            'request_react_on'          => 'Reaja:',
            'request_react'             => 'Reagir',
            'request_description'       => 'Descrição',
            'request_react_on_ticket'   => 'Reaja no tíquete',
            'request_contact'           => 'Contato ' . Config::site['shortname'],
            'request_contact_help'      => 'Você pode nos contatar abrindo um novo tíquete.',
            'request_new_ticket'        => 'Novo ticket',
            'request_subject'           => 'Sujeito',
            'request_type'              => 'Tipo',
            'request_status'            => 'Ticket aberto',
            'request_in_treatment'      => 'Em progresso',
            'request_open'              => 'Aberto',
            'request_closed'            => 'Fechado'
        ),
        'help_new' => array (
            'title'         => 'Meu ticket',
            'subject'       => 'Título',
            'description'   => 'Descrição',
            'open_ticket'   => 'Abrir um ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'Entrar',
            'friends_online'          => 'Amigos online',
            'now_in'                  => 'Agora em',
            'latest_news'             => 'Últimas notícias',
            'latest_facts'            => 'Os fatos mais recentes dentro ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Quartos populares',
            'popular_rooms_label'     => 'Saiba quais quartos estão em alta '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'Não há ninguém dentro do nosso hotel!!',
            'goto_room'               => 'Vá para o quarto',
            'popular_groups'          => 'Popular groups',
            'popular_groups_label'    => 'De quem você quer entrar?',
            'popular_no_groups'       => 'Nenhum grupo foi criado ainda!',
            'load_news'               => 'Carregue mais notícias',
            'user_of_the_week'        =>  Config::site['shortname'] . ' da semana',
            'user_of_the_week_label'  => 'Usuário da semana'
        ),
        'lost' => array (
            'page_not_found'          => 'página não encontrada!',
            'page_content_1'          => 'Desculpe, a página que você está tentando encontrar não existe.',
            'page_content_2'          => 'Verifique novamente se você tem o url correta. Se você vier aqui de novo (bem-vindo de volta!). Em seguida, volte para de onde você veio com o botão Voltar .',
            'sidebar_title'           => 'Talvez você estivesse procurando por...',
            'sidebar_stats'           => 'A casa de um de seus amigos?',
            'sidebar_stats_label_1'   => 'Talvez ele/ela esteja no',
            'sidebar_stats_label_2'   => 'Notas altas',
            'sidebar_rooms'           => 'Quartos populares?',
            'sidebar_rooms_label_1'   => 'Navegue no',
            'sidebar_rooms_label_2'   => 'Navegador',
            'sidebar_else'            => 'Eu perdi meus chinelos!',
            'sidebar_else_label'      => 'Então você realmente tem que pesquisar melhor! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Quem é que você esta procurando?',
            'since'                 => 'Desde a',
            'currently'             => 'Atualmente',
            'never_online'          => 'Ainda não está online',
            'last_visit'            => 'Última visita',
            'guestbook_title'       => 'Livro de visitas',
            'guestbook_label'       => 'Você deixa algo?',
            'guestbook_input'       => 'O que você está fazendo,',
            'guestbook_input_1'     => 'O que você quer',
            'guestbook_input_2'     => 'saber?',
            'guestbook_load_more'   => 'Carregar mais mensagens',
            'badges_title'          => 'Emblemas',
            'badges_label'          => 'Emblemas aleatórios que posso usar',
            'badges_empty'          => 'Ainda não definiu emblemas',
            'friends_title'         => 'Amigos',
            'friends_label'         => 'Amigos aleatórios na minha lista',
            'friends_empty'         => 'Ainda não fez nenhum amigo',
            'groups_title'          => 'Grupos',
            'groups_label'          => 'Veja o que eu amo!',
            'groups_empty'          => 'Ainda não entrou em um grupo',
            'rooms_title'           => 'Quartos',
            'rooms_label'           => 'Minhas últimas salas criadas',
            'rooms_empty'           => 'Ainda não criou nenhuma sala',
            'photos_title'          => 'Fotos',
            'photos_label'          => 'Você vai tirar uma foto comigo?',
            'photos_empty'          => 'Ainda não tirou nenhuma foto',
            'title'                 => 'Perfil'
        ),
        'registration' => array (
            'title'                 => 'Insira suas informações!',
            'email'                 => 'Endereço de e-mail',
            'email_fill'            => 'Insira o seu endereço de e-mail aqui...',
            'email_help'            => 'Precisaremos dessas informações para restaurar sua conta, caso você perca o acesso.',
            'password'              => 'Senha',
            'password_fill'         => 'Senha...',
            'password_repeat'       => 'Repita a senha',
            'password_repeat_fill'  => 'Repita a senha...',
            'password_help_1'       => 'Sua senha deve ter pelo menos 6 caracteres e conter letras e números.',
            'password_help_2'       => 'Certifique-se de que sua senha seja diferente da de outros sites!',
            'birthdate'             => 'Data de nascimento',
            'day'                   => 'Dia',
            'month'                 => 'Mês',
            'year'                  => 'Ano',
            'birthdate_help'        => 'Precisaremos dessas informações para restaurar sua conta, caso você perca o acesso.',
            'found'                 => 'Como você encontrou ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Faça uma escolha...',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'Por um amigo',
            'found_choose_3'        => 'Por outro jogo',
            'found_choose_4'        => 'Por facebook',
            'found_choose_5'        => 'De outros',
            'create_user'           => 'Crie o seu ' . Config::site['shortname'] . '!',
            'username'              => 'Nick',
            'username_fill'         => 'Nick...',
            'username_help'         => 'Seu nome único em ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Sexo',
            'male'                  => 'Menino',
            'female'                => 'Menina',
            'register'              => 'Registrar',
            'header_slogan2'        => 'Junte-se à nossa comunidade e faça novos amigos'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'React on the invoice',
            'content_1'           => 'Thank you for your interest in ' . Config::site['shortname'] . ' Hotel and for responding to the vacancy.',
            'content_2'           => 'Try to answer the questionnaire as accurately as possible.',
            'description'         => 'Job description',
            'question_name'       => 'What\'s your name?',
            'question_age'        => 'How old are you?',
            'question_why'        => 'Why do you think you might be suitable?',
            'question_time'       => 'How many hours are you online?',
            'question_time_help'  => 'Tell us how many hours you spend online a day at ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Monday',
            'tuesday'             => 'Tuesday',
            'wednesday'           => 'Wednesday',
            'thursday'            => 'Thursday',
            'friday'              => 'Friday',
            'saturday'            => 'Saturday',
            'sunday'              => 'Sunday',
            'time_to_time'        => 'from X to Y hours',
            'send'                => 'Send my application'
        ),
        'jobs' => array (
            'title'                   => 'List of vacancies',
            'applications'            => 'My applications',
            'available_applications'  => 'Available vacancies',
            'buildteam'               => 'Buildteam',
            'buildteam_desc'          => 'They are responsible for building (event/official) rooms.',
            'react'                   => 'React'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Forgot your password?',
            'content_1'             => 'Enter your ' . Config::site['shortname'] . 'name and e-mail address below and we will send you a link by e-mail to change your password.',
            'content_2'             => 'Don\'t do this if someone asks you to do this!',
            'username'              =>  Config::site['shortname'] . 'name',
            'email'                 => 'E-mail address',
            'send'                  => 'Send e-mail',
            'wrong_page'            => 'False alarm!',
            'wrong_page_content_1'  => 'If you remember your password - or ended up here by accident - you can use the link below to return to the homepage.',
            'back_to_home'          => 'Back to the homepage'
        ),
        'password_reset' => array (
            'title'                     => 'Change Password',
            'new_password'              => 'New password',
            'new_password_fill'         => 'Enter your new password...',
            'new_password_repeat_fill'  => 'Please re-enter your password...',
            'change_password'           => 'Change password'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'My preferences',
            'password'       => 'Change password',
            'verification'   => 'Set verification',
            'email'          => 'Change e-mail address',
            'namechange'     => 'Change ' . Config::site['shortname'] . 'name',
            'shop_history'   => 'Purchase history'
        ),
        'settings_email' => array (
            'title'           => 'Change e-mail',
            'email_title'     => 'E-mail address',
            'email_label'     => 'Your e-mail address is required to restore your account in case you lose access.',
            'password_title'  => 'Current password',
            'fill_password'   => 'Enter your current password...',
            'save'            => 'Save'
        ),
        'settings_namechange' => array (
            'title'           => 'Change ' . Config::site['shortname'] . 'name',
            'help_1'          => 'Do you want to change your ' . Config::site['shortname'] . 'name? Which can! This costs',
            'help_2'          => 'and will be debited immediately after your request. Once your name has been changed we cannot reverse it! So make sure you think carefully about your decision!',
            'fill_username'   =>  Config::site['shortname'] . 'name...',
            'request'         => 'Request'
        ),
        'settings_password' => array (
            'title'                     => 'Change password',
            'password_title'            => 'Current password',
            'fill_password'             => 'Enter your current password...',
            'newpassword_title'         => 'New password',
            'fill_newpassword'          => 'Enter your new password here...',
            'fill_newpassword_repeat'   => 'Repeat your new password...',
            'help'                      => 'Your password must be at least 6 characters long and contain letters and numbers.',
            'save'                      => 'Save'
        ),
        'settings_preferences' => array (
            'title'               => 'My preferences',
            'follow_title'        => 'Follow function - who can follow you?' ,
            'follow_label'        => 'I don\'t want ' . Config::site['shortname'] . '\'s to follow me',
            'friends_title'       => 'Friend requests',
            'friends_label'       => 'Allow friendship requests?',
            'room_title'          => 'Room invites',
            'room_label'          => 'I don\'t want to be invited to rooms',
            'hotelalerts_title'   => 'Hotel alerts',
            'hotelalerts_label'   => 'I don\'t want to receive hotel notifications',
            'chat_title'          => 'Chat settings',
            'chat_label'          => 'I want to use the old chat'
        ),
        'settings_verification' => array (
            'title'                 => 'Secure your account',
            'help'                  => 'This check increases the security of your account. When you log in, you must, depending on your preferences, answer the security questions you have defined or enter a code generated by your application.',
            'password_title'        => 'Enter your password',
            'auth_title'            => 'Two-step verification',
            'auth_label'            => 'Secure your account with two-step verification',
            'method_title'          => 'Verification method',
            'method_choose'         => 'Choose your verification method...',
            'method_pincode'        => 'I want to set a pin code',
            'method_auth_app'       => 'I want to use Google 2FA',
            'pincode_title'         => 'Pincode security',
            'pincode_label'         => 'Put a pincode on your account as extra security, with this you ensure better protection of your account against hackers.',
            'fill_pincode'          => 'Enter your pincode',
            'generate_auth'         => 'Code generation by 2FA',
            'generate_auth_label'   => 'This method is the most reliable. It links your ' . Config::site['shortname'] . ' account to an authentication application (Google Authenticator) on your phone. When you sign up, all you have to do is enter the code generated by your app.',
            'link_account'          => 'Link your account',
            'link_account_label'    => 'To link your account, simply scan this QR code with your application and then click save to validate this change.',
            'save'                  => 'Save'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Club benefits',
            'club_buy'            => 'Purchase ' . Config::site['shortname'] . ' Club',
            'unlimited'           => 'Unlimited',
            'more_information'    => 'More information',
            'content_1'           => 'Do you have a question or problem with a purchase?',
            'content_2'           => 'Do not hesitate to contact customer service via the',
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool',
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' Club members',
            'desc'                => 'Here you can buy ' . Config::site['shortname'] . ' club for real money. With club you can buy exclusive items.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Purchase history',
            'product'             => 'Product',
            'date'                => 'Date',
            'buy_history_empty'   => 'You do not have a purchase history yet.',
            'buy_club'            => 'Purchase ' . Config::site['shortname'] . ' Club',
            'content_1'           => 'Do you have a question or problem with a purchase?',
            'content_2'           => 'Do not hesitate to contact customer service via the',
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool',
            'title'               => 'My Purchase history',
            'desc'                => 'You see here all the purchases you have made',
            'title_draw'          => 'Draw your badge',
            'draw_desc'           => 'Draw your own badge for points'
        ),
        'shop_offers' => array (
            'back'              => 'Back',
            'buymethods'        => 'Payment methods',
            'for'               => 'for',
            'or_lower'          => 'or lower',
            'loading_methods'   => 'The payment methods are being loaded...',
            'store'             => 'Store'
        ),
        'shop' => array (
            'title'             => 'Select a product',
            'country'           => 'Country:',
            'netherlands'       => 'Netherlands',
            'belgium'           => 'Belgium',
            'super_rare'        => 'Super rare',
            'more_information'  => 'More information',
            'content_1'         => 'Do you have a question or problem with a purchase?',
            'content_2'         => 'Do not hesitate to contact customer service via the',
            'help_tool'         =>  Config::site['shortname'] . ' Help Tool',
            'not_logged'        => 'Oops! You\'re not logged in.',
            'have_to_login'     => 'You must be logged in to visit the ' . Config::site['shortname'] . ' Shop.',
            'click_here'        => 'Click here',
            'to_login'          => 'to log in.',
            'store'             => 'Store',
            'desc'              => 'Here you can buy credits for real money, with this you can buy exclusive items in our catalogue'
        ),
        'games_ranking' => array(
            'title'             => 'Highscores',
            'desc'              => 'On this you find all the high scores of our players!'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => 'Cannot process request because the hotelapi is turned off!'
        ),
        'dialog' => array (
            'logged_in'             => 'Oops to visit this page you must be logged in!',
            'not_logged_in'         => 'You do not have to be logged in to visit this page!'
        ),
        'notification' => array (
            'message_placed'        => 'Your message has been posted!',
            'message_deleted'       => 'Your message has been deleted!',
            'invisible'             => 'This is made invisible!',
            'profile_invisible'     => 'This ' . Config::site['shortname'] . ' has made his/her profile invisible.',
            'profile_notfound'      => 'Unfortunately.. we could not find the ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'You do not have permission.',
            'already_liked'         => 'You already like this!',
            'liked'                 => 'You like this!',
            'banned_1'              => 'You have been banned for breaking the ' . Config::site['shortname'] . ' Rules:',
            'banned_2'              => 'Your ban expires:',
            'something_wrong'       => 'Something went wrong, please try again.',
            'room_not_exists'       => 'This room does not exist!',
            'staff_received'        => 'Thanks! The ' . Config::site['shortname'] . ' Staff has received this!',
            'not_enough_belcredits' => 'You do not have enough gotwpoints.',
            'not_enough_points'     => 'You do not have enough points.',
            'topic_closed'          => 'You cannot respond to a topic that has been closed!',
            'post_not_allowed'      => 'You don\'t have access to create a post in this forum!',
            'draw_badge_uploaded'   => 'Your badge has been submitted and is ready for review!'
        ),
        'pattern' => array (
            'can_be'                => 'may maximum',
            'must_be'               => 'must be minimal',
            'characters_long'       => 'characters long.',
            'invalid'               => 'does not meet the requirements!',
            'invalid_characters'    => 'contains invalid characters!',
            'is_required'           => 'Fill out all fields!',
            'not_same'              => 'does not match',
            'captcha'               => 'Recaptcha was entered incorrectly!',
            'numeric'               => 'must be numeric!',
            'email'                 => 'is not valid!'
        ),
        'title' => array (
            'home'              => 'Make friends, play games, make rooms and stand out!',
            'lost'              => 'Page not found!',
            'registration'      => 'Register for free!',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => 'Forgot password?',
                'reset'    => 'Change password',
            ),
            'settings' => array (
                'index'         => 'My preferences',
                'password'      => 'Change password',
                'email'         => 'Change e-mail',
                'namechange'    => 'Change ' . Config::site['shortname'] . 'name'
            ),
            'community' => array (
                'index'     => 'Community',
                'photos'    => 'Photo\'s',
                'staff'     =>  Config::site['shortname'] . ' Staff',
                'team'      =>  Config::site['shortname'] . ' Team',
                'fansites'  => 'Fansites',
                'value'     => 'Catalogue Marketplace',
                'forum'     => 'My Guilds'
            ),
            'games' => array (
                'ranking'   => 'Highscores'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store',
                'history'   => 'Purchase history',
                'club'      =>  Config::site['shortname'] . ' Club'
            ),
            'help' => array (
                'index'     => 'Help Tool',
                'requests'  => 'Help Tickets',
                'new'       => 'Open Help Ticket'
            ),
            'jobs' => array (
                'index'     =>  Config::site['shortname'] . ' Vacancies',
                'apply'     => 'Respond to vacancy'
            )
        )
    ),
    'login' => array (
        'invalid_password'          => 'Invalid password.',
        'invalid_pincode'           => 'This pin code does not match that of this ' . Config::site['shortname'] . '!',
        'fill_in_pincode'           => 'Enter your pin code now to gain access to your account!'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'name is contrary to the ' . Config::site['shortname'] . ' Rules.',
        'username_exists'           =>  Config::site['shortname'] . 'name is already in use :-(',
        'email_exists'              =>  'This e-mail address is already in use :-(',
        'too_many_accounts'         => 'There are too many accounts registered on this ip :-('
    ),
    'claim' => array (
        'invalid_email'             => 'This e-mail address does not match that of this ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'This link has expired. Request your password again to change your password.',
        'send_link'                 => 'We have just sent you an e-mail! Received nothing? Then check the junk e-mail folder.',
        'password_changed'          => 'Your password has been changed. You can now log in again!',

        'email'  => array (
            'title'                 => 'Change your password.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Your e-mail address has been changed.',
        'pincode_saved'             => 'Your pin code has been saved, you will have to log in again. See you soon! :)',
        'password_saved'            => 'Your password has been changed. You will now have to log in again. See you soon! :)',
        'preferences_saved'         => 'Your preferences have been saved!',
        'current_password_invalid'  => 'Current password does not match that of your ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Enter a new ' . Config::site['shortname'] . 'name.',
        'choose_new_pincode'        => 'Enter a new pin code.',
        'user_is_active'            => 'This ' . Config::site['shortname'] . ' may still be active!',
        'user_not_exists'           => 'This ' . Config::site['shortname'] . 'name is available and does not exist yet!',
        'name_change_saved'         => 'Your application will be processed, 50 gotw-points have been debited.',
        'invalid_secretcode'        => 'Google Authentication secret code is incorrect.',
        'enabled_secretcode'        => 'Authentication method set! You will have to log in again... see you soon!',
        'disabled_secretcode'       => 'Authentication method disabled!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transaction could not be processed!',
            'invalid_code'          => 'The code you entered is incorrect.',
            'success_1'             => 'Thank you for your purchase! You have received',
            'success_2'             => 'gotw-points.'
        ),
        'club' => array (
            'already_vip'           => 'You are an unlimited member of the ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Yeah! You are now a member of the ' . Config::site['shortname'] . ' Club for 31 days.'

        ),
        'marketplace' => array(
            'expired'               => 'Item is expired, its not possible to purchase this item!',
            'purchased'             => 'Item is succesfull purchased and is now added to your inventory',
            'regards'               => 'Your item has been arrived! Friendly regards from ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'Your Help Ticket has been created. View your Help Tickets to view the help request.',
        'ticket_received'           => 'An ' . Config::site['shortname'] . ' Staff has responded to your Help Tool ticket. Visit the Help Tool to view the response.',
        'already_open'              => 'You still have an outstanding ticket! When this has been treated you can create a ticket again.',
        'no_answer_yet'             => 'You can only respond once an ' . Config::site['shortname'] . ' Staff has answered your ticket.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky updated!',
        'is_closed'                 => 'Topic status changed!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Dashboard'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
