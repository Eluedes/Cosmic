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
            'title'               => 'Reaja na fatura',
            'content_1'           => 'Obrigado pelo seu interesse em ' . Config::site['shortname'] . ' Hotel e por responder à vaga.',
            'content_2'           => 'Tente responder ao questionário com a maior precisão possível.',
            'description'         => 'Descrição do trabalho',
            'question_name'       => 'Qual o seu nick?',
            'question_age'        => 'Quantos anos você tem?',
            'question_why'        => 'Por que você acha que pode ser adequado?',
            'question_time'       => 'Quantas horas você está online?',
            'question_time_help'  => 'Diga-nos quantas horas você passa online por dia em ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Segunda-feira',
            'tuesday'             => 'Terça-feira',
            'wednesday'           => 'Quarta-feira',
            'thursday'            => 'Quinta-feira',
            'friday'              => 'Sexta-feira',
            'saturday'            => 'Sábado',
            'sunday'              => 'Domingo',
            'time_to_time'        => 'de X a Y horas',
            'send'                => 'Enviar minha inscrição'
        ),
        'jobs' => array (
            'title'                   => 'Lista de vagas',
            'applications'            => 'As minhas aplicações',
            'available_applications'  => 'Vagas Disponíveis',
            'buildteam'               => 'Construir Equipe',
            'buildteam_desc'          => 'Eles são responsáveis pela construção de salas (eventos/oficiais).',
            'react'                   => 'Reagir'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Esqueceu sua senha?',
            'content_1'             => 'Insira o seu ' . Config::site['shortname'] . 'nome e endereço de e-mail abaixo e nós lhe enviaremos um link por e-mail para alterar sua senha.',
            'content_2'             => 'Não faça isso se alguém pedir que você faça isso!',
            'username'              => 'Nick',
            'email'                 => 'Endereço de e-mail',
            'send'                  => 'Enviar email',
            'wrong_page'            => 'Alarme falso!',
            'wrong_page_content_1'  => 'Se você se lembra da sua senha - ou acabou aqui por acidente - você pode usar o link abaixo para retornar à página inicial.',
            'back_to_home'          => 'Voltar a página inicial'
        ),
        'password_reset' => array (
            'title'                     => 'Mudar senha',
            'new_password'              => 'Nova senha',
            'new_password_fill'         => 'Digite sua nova senha...',
            'new_password_repeat_fill'  => 'Por favor, digite sua senha novamente...',
            'change_password'           => 'Mudar senha'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Minhas preferências',
            'password'       => 'Mudar senha',
            'verification'   => 'Set verification',
            'email'          => 'Mude o endereço de email',
            'namechange'     => 'Trocar nick',
            'shop_history'   => 'Histórico de compras'
        ),
        'settings_email' => array (
            'title'           => 'Mudar o e-mail',
            'email_title'     => 'Endereço de e-mail',
            'email_label'     => 'Seu endereço de e-mail é necessário para restaurar sua conta, caso você perca o acesso.',
            'password_title'  => 'Senha atual',
            'fill_password'   => 'Digite sua senha atual...',
            'save'            => 'Salvar'
        ),
        'settings_namechange' => array (
            'title'           => 'Trocar nick',
            'help_1'          => 'Você quer mudar o seu nick? Você pode! Isso gera custo',
            'help_2'          => 'e será debitado imediatamente após sua solicitação. Uma vez que seu nome foi alterado, não podemos revertê-lo! Portanto, certifique-se de pensar cuidadosamente sobre sua decisão!',
            'fill_username'   =>  Config::site['shortname'] . 'nick...',
            'request'         => 'Solicitação'
        ),
        'settings_password' => array (
            'title'                     => 'Mudar senha',
            'password_title'            => 'Senha atual',
            'fill_password'             => 'Digite sua senha atual...',
            'newpassword_title'         => 'Nova senha',
            'fill_newpassword'          => 'Digite sua nova senha aqui...',
            'fill_newpassword_repeat'   => 'Repita sua nova senha...',
            'help'                      => 'Sua senha deve ter pelo menos 6 caracteres e conter letras e números.',
            'save'                      => 'Salvar'
        ),
        'settings_preferences' => array (
            'title'               => 'Minhas preferências',
            'follow_title'        => 'Função de seguimento - quem pode seguir você?' ,
            'follow_label'        => 'Eu não quero que me sigam',
            'friends_title'       => 'Pedidos de amizade',
            'friends_label'       => 'Permitir pedidos de amizade?',
            'room_title'          => 'Convites de quarto',
            'room_label'          => 'Eu não quero ser convidado para quarto',
            'hotelalerts_title'   => 'Alertas do hotel',
            'hotelalerts_label'   => 'Não quero receber notificações de hotel',
            'chat_title'          => 'Configurações de bate-papo',
            'chat_label'          => 'Eu quero usar o chat antigo'
        ),
        'settings_verification' => array (
            'title'                 => 'Proteja sua conta',
            'help'                  => 'Esta verificação aumenta a segurança da sua conta. Ao fazer o login, você deve, dependendo de suas preferências, responder às questões de segurança que você definiu ou inserir um código gerado por seu aplicativo.',
            'password_title'        => 'Coloque sua senha',
            'auth_title'            => 'Verificação em duas etapas',
            'auth_label'            => 'Proteja sua conta com a verificação em duas etapas',
            'method_title'          => 'Método de verificação',
            'method_choose'         => 'Escolha o seu método de verificação...',
            'method_pincode'        => 'Eu quero definir um código PIN',
            'method_auth_app'       => 'Eu quero usar o Google 2FA',
            'pincode_title'         => 'Segurança Pincode',
            'pincode_label'         => 'Coloque um código PIN em sua conta como segurança extra, com isso você garante uma melhor proteção de sua conta contra hackers.',
            'fill_pincode'          => 'Digite seu código PIN',
            'generate_auth'         => 'Geração de código por 2FA',
            'generate_auth_label'   => 'Este método é o mais confiável. Ele liga seu ' . Config::site['shortname'] . ' conta para um aplicativo de autenticação (Google Authenticator) em seu telefone. Ao se inscrever, tudo que você precisa fazer é inserir o código gerado pelo seu aplicativo.',
            'link_account'          => 'Vincule sua conta',
            'link_account_label'    => 'Para vincular sua conta, basta escanear este código QR com seu aplicativo e clicar em salvar para validar esta alteração.',
            'save'                  => 'Salvar'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Vip',
            'club_buy'            => 'Compre seu Vip ',
            'unlimited'           => 'Ilimitado',
            'more_information'    => 'Mais Informações',
            'content_1'           => 'Você tem alguma dúvida ou problema com uma compra?',
            'content_2'           => 'Não hesite em contactar o serviço de apoio ao cliente através da',
            'help_tool'           => 'Ferramenta de Ajuda',
            'random_club_users'   => 'Aleatório Membros do clube vip',
            'desc'                => 'Aqui você pode comprar ' . Config::site['shortname'] . ' clube por dinheiro real. Com o clube você pode comprar itens exclusivos.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Histórico de compras',
            'product'             => 'Produtos',
            'date'                => 'Encontro',
            'buy_history_empty'   => 'Você ainda não tem um histórico de compras.',
            'buy_club'            => 'Compra ' . Config::site['shortname'] . ' Club',
            'content_1'           => 'Você tem alguma dúvida ou problema com uma compra?',
            'content_2'           => 'Não hesite em contactar o serviço de apoio ao cliente através do',
            'help_tool'           => 'Ferramenta de Ajuda',
            'title'               => 'Meu histórico de compras',
            'desc'                => 'Você vê aqui todas as compras que você fez',
            'title_draw'          => 'Desenhe seu emblema',
            'draw_desc'           => 'Desenhe seu próprio emblema para ganhar pontos'
        ),
        'shop_offers' => array (
            'back'              => 'Voltar',
            'buymethods'        => 'Métodos de Pagamento',
            'for'               => 'para',
            'or_lower'          => 'ou inferior',
            'loading_methods'   => 'Os métodos de pagamento estão sendo carregados...',
            'store'             => 'Loja'
        ),
        'shop' => array (
            'title'             => 'Selecione um produto',
            'country'           => 'País:',
            'netherlands'       => 'Netherlands',
            'belgium'           => 'Belgium',
            'super_rare'        => 'Super raro',
            'more_information'  => 'Mais Informações',
            'content_1'         => 'Você tem alguma dúvida ou problema com uma compra?',
            'content_2'         => 'Não hesite em contactar o serviço de apoio ao cliente através do',
            'help_tool'         => 'Ferramenta de Ajuda',
            'not_logged'        => 'Oops! Você não está logado.',
            'have_to_login'     => 'Você deve estar logado para visitar a Loja',
            'click_here'        => 'Clique aqui',
            'to_login'          => 'Entrar.',
            'store'             => 'Loja',
            'desc'              => 'Aqui você pode comprar créditos com dinheiro real, com isso você pode comprar itens exclusivos em nosso catálogo'
        ),
        'games_ranking' => array(
            'title'             => 'All da Fama',
            'desc'              => 'Nele você encontra todas as pontuações mais altas de nossos jogadores!'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => 'Não é possível processar a solicitação porque o hotelapi está desligado!'
        ),
        'dialog' => array (
            'logged_in'             => 'Oops para visitar esta página você deve estar logado!',
            'not_logged_in'         => 'Você não precisa estar logado para visitar esta página!'
        ),
        'notification' => array (
            'message_placed'        => 'Sua mensagem foi postada!',
            'message_deleted'       => 'Your message has been deleted!',
            'invisible'             => 'Isso se tornou invisível!',
            'profile_invisible'     => 'Este úsuario tornou seu perfil invisível.',
            'profile_notfound'      => 'Infelizmente.. não conseguimos encontrar o úsuario!',
            'no_permissions'        => 'Você não tem permissão.',
            'already_liked'         => 'Você já gosta disso!',
            'liked'                 => 'Você gosta disso!',
            'banned_1'              => 'Você foi banido por quebrar as Regras do Hotel:',
            'banned_2'              => 'Seu banimento expira:',
            'something_wrong'       => 'Alguma coisa deu errado. Por favor tente outra vez.',
            'room_not_exists'       => 'Esta quarto não existe!',
            'staff_received'        => 'Obrigado! A ' . Config::site['shortname'] . ' A equipe recebeu isso!',
            'not_enough_belcredits' => 'Você não tem pontos de controle suficientes.',
            'not_enough_points'     => 'Você não tem pontos suficientes.',
            'topic_closed'          => 'Você não pode responder a um tópico que foi fechado!',
            'post_not_allowed'      => 'Você não tem acesso para criar uma postagem neste fórum!',
            'draw_badge_uploaded'   => 'Seu emblema foi enviado e está pronto para revisão!'
        ),
        'pattern' => array (
            'can_be'                => 'pode no máximo',
            'must_be'               => 'deve ser mínimo',
            'characters_long'       => 'caracteres longos.',
            'invalid'               => 'não atende aos requisitos!',
            'invalid_characters'    => 'Contém caracteres inválidos!',
            'is_required'           => 'Preencha todos os campos!',
            'not_same'              => 'não corresponde',
            'captcha'               => 'O recaptcha foi inserido incorretamente!',
            'numeric'               => 'deve ser numérico!',
            'email'                 => 'não é válido!'
        ),
        'title' => array (
            'home'              => 'Faça amigos, jogue, crie salas e se destaque!',
            'lost'              => 'página não encontrada!',
            'registration'      => 'Cadastre-se gratuitamente!',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => 'Esqueceu a senha?',
                'reset'    => 'Mudar senha',
            ),
            'settings' => array (
                'index'         => 'Minhas preferências',
                'password'      => 'Mudar senha',
                'email'         => 'Mude o e-mail',
                'namechange'    => 'Trocar nick'
            ),
            'community' => array (
                'index'     => 'Comunidade',
                'photos'    => 'Galeria',
                'staff'     =>  'Equipe',
                'team'      =>  'Colaboradores',
                'fansites'  => 'Fansites',
                'value'     => 'Catálogo do Mercado',
                'forum'     => 'Minhas Guildas'
            ),
            'games' => array (
                'ranking'   => 'All da Fama'
            ),
            'shop' => array (
                'index'     => 'Loja',
                'history'   => 'Histórico de compras',
                'club'      =>  'Vip'
            ),
            'help' => array (
                'index'     => 'Ferramenta de Ajuda',
                'requests'  => 'Tíquetes de ajuda',
                'new'       => 'Abra o tíquete de ajuda'
            ),
            'jobs' => array (
                'index'     => 'Vagas',
                'apply'     => 'Responder à vaga'
            )
        )
    ),
    'login' => array (
        'invalid_password'          => 'Senha inválida.',
        'invalid_pincode'           => 'Este código PIN não corresponde ao deste ' . Config::site['shortname'] . '!',
        'fill_in_pincode'           => 'Digite seu código PIN agora para obter acesso à sua conta!'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'nome é contrário ao ' . Config::site['shortname'] . ' Rules.',
        'username_exists'           =>  Config::site['shortname'] . 'nick já está em uso :-(',
        'email_exists'              =>  'Este endereço de e-mail já está em uso :-(',
        'too_many_accounts'         => 'Existem muitas contas registradas neste IP :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Este endereço de e-mail não corresponde ao deste ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'Este link expirou. Solicite sua senha novamente para alterar sua senha.',
        'send_link'                 => 'Acabamos de enviar um e-mail para você! Não recebeu nada? Em seguida, verifique a pasta de lixo eletrônico.',
        'password_changed'          => 'Sua senha foi mudada. Agora você pode entrar novamente!',

        'email'  => array (
            'title'                 => 'Mude sua senha.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Seu endereço de e-mail foi alterado.',
        'pincode_saved'             => 'Seu código PIN foi salvo, você terá que fazer o login novamente. Te vejo em breve! :)',
        'password_saved'            => 'Sua senha foi mudada. Agora você terá que fazer login novamente. Te vejo em breve! :)',
        'preferences_saved'         => 'Suas preferências foram salvas!',
        'current_password_invalid'  => 'A senha atual não corresponde à sua ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Insira um novo ' . Config::site['shortname'] . 'nick.',
        'choose_new_pincode'        => 'Insira um novo código PIN.',
        'user_is_active'            => 'Isto ' . Config::site['shortname'] . ' pode ainda estar ativo!',
        'user_not_exists'           => 'Isto ' . Config::site['shortname'] . 'o nome está disponível e ainda não existe!',
        'name_change_saved'         => 'Sua inscrição será processada, 50 gotw-points foram debitados.',
        'invalid_secretcode'        => 'O código secreto do Google Authenticator está incorreto.',
        'enabled_secretcode'        => 'Método de autenticação definido! Você terá que fazer o login novamente... até breve!',
        'disabled_secretcode'       => 'Método de autenticação desativado!'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'A transação não pôde ser processada!',
            'invalid_code'          => 'O código que você digitou está incorreto.',
            'success_1'             => 'Obrigado por sua compra! Você recebeu',
            'success_2'             => 'gotw-points.'
        ),
        'club' => array (
            'already_vip'           => 'Você é um membro ilimitado do ' . Config::site['shortname'] . ' Club Vip.',
            'purchase_success'      => 'Yeah! Você agora é um membro do ' . Config::site['shortname'] . ' Club Vip por 31 dias.'

        ),
        'marketplace' => array(
            'expired'               => 'O item expirou, não é possível comprar este item!',
            'purchased'             => 'O item foi comprado com sucesso e agora é adicionado ao seu inventário',
            'regards'               => 'Seu item foi entregue! Saudações amigáveis de ' . Config::site['shortname']
        )
    ),
    'help' => array (
        'ticket_created'            => 'Seu tíquete de ajuda foi criado. Veja seus tíquetes de ajuda para ver o pedido de ajuda.',
        'ticket_received'           => 'A equipe respondeu ao seu tíquete de ferramenta de ajuda. Visite a Ferramenta de Ajuda para ver a resposta.',
        'already_open'              => 'Você ainda tem um ingresso excelente! Quando isso for tratado, você pode criar um tíquete novamente.',
        'no_answer_yet'             => 'Você só pode responder quando um Staff responder ao seu tíquete.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky atualizado!',
        'is_closed'                 => 'Status do tópico alterado!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Dashboard'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Nome do usuário'
        )
    )
);
