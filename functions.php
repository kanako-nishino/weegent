<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

// カスタム投稿タイプ「ご支援実績(work)」「お役立ち資料(document)」
add_action('init', function () {
    register_post_type('work', [
        // パンくず・ページタイトル・管理画面のメニュー名に使われる(サイト上の呼び方に合わせる)
        'label' => 'ご支援実績',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'work'],
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

    register_post_type('document', [
        'label' => 'お役立ち資料',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'document'],
        'menu_icon' => 'dashicons-media-document',
        // 説明文・訴求ポイントはACF欄で入力するため、本文と抜粋は使わない
        'supports' => ['title', 'thumbnail'],
        'show_in_rest' => true,
    ]);

    // YouTube動画。トップ・サービスページの「動画で見る、Weegentの品質」に表示する。
    // 一覧・詳細ページは持たず、カードからYouTubeへ直接遷移する。
    register_post_type('video', [
        'label' => '動画',
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => ['title'],
        'show_in_rest' => true,
    ]);

    // メンバーの個別ページ。旧サイトのURL(/member/matsushita-yuta/ 等)を引き継ぐ。
    // 一覧ページは持たず、/member/ へのアクセスは会社情報の役員紹介へ転送する。
    register_post_type('member', [
        'label' => 'メンバー',
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'member'],
        'menu_icon' => 'dashicons-id',
        // 写真はアイキャッチ、経歴・実績は本文で入力する
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'show_in_rest' => true,
    ]);

    // お役立ち資料のカテゴリ(カード上部の表示用。絞り込みページは持たない)。
    // 選択は ACF のラジオボタン(1つだけ)で行うため、標準のメタボックスは出さない。
    register_taxonomy('document_category', 'document', [
        'label' => '資料カテゴリ',
        'hierarchical' => true,
        'public' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => false,
        'meta_box_cb' => false,
        'rewrite' => false,
    ]);

    // ご支援実績のカテゴリ(タイトル下のタグ表示に使用)
    register_taxonomy('work_category', 'work', [
        'label' => '事例カテゴリ',
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'work-category'],
    ]);
});

// 事例一覧(archive-work.php)は1ページ12件表示、以降はページネーションで送る。
add_action('pre_get_posts', function ($query) {
    if (! is_admin() && $query->is_main_query() && is_post_type_archive('work')) {
        $query->set('posts_per_page', 12);
    }
    // お役立ち資料一覧はページ送りを持たないため全件表示する。
    if (! is_admin() && $query->is_main_query() && is_post_type_archive('document')) {
        $query->set('posts_per_page', -1);
    }
});

// header.php / template-parts で共通利用するヘルパー
// トップページのセクションID(#service等)を指すリンクを生成。
// トップページ以外ではホームURL付きのリンクにする。
function weegent_home_anchor($hash)
{
    return is_front_page() ? $hash : home_url('/' . $hash);
}

// 投稿タイプアーカイブへのリンク(パーマリンク設定に追従する)
function weegent_work_archive_link()
{
    return get_post_type_archive_link('work') ?: home_url('/');
}

function weegent_document_archive_link()
{
    return get_post_type_archive_link('document') ?: home_url('/');
}

// お役立ち資料はPDFへ直接リンクせず、必ず専用フォームを経由させる。
// 資料IDを付けておくことで、フォーム側とメール送信側で対象資料を判別できる。
function weegent_resource_download_url($document_id = 0)
{
    $url = home_url('/resource-download/');
    $document_id = absint($document_id);

    return $document_id ? add_query_arg('document_id', $document_id, $url) : $url;
}

// 「投稿ページ」(設定 > 表示設定 > 投稿ページ)へのリンク。未設定ならホームを返す。
function weegent_news_archive_link()
{
    $page_id = (int) get_option('page_for_posts');
    return $page_id ? get_permalink($page_id) : home_url('/');
}

// --------------------------------
// ACF: 各投稿タイプ・ユーザーの入力欄
// --------------------------------
add_action('acf/init', function () {
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    // ご支援実績(work)の詳細情報。事例カード(業種/従業員数/導入企業)の表示に使う。
    // 支援プランは事例カテゴリ(work_category)で管理する。
    acf_add_local_field_group([
        'key' => 'group_weegent_work_details',
        'title' => 'ご支援実績の詳細情報',
        'fields' => [
            ['key' => 'field_weegent_work_industry', 'label' => '業種', 'name' => 'work_industry', 'type' => 'text'],
            ['key' => 'field_weegent_work_employee_count', 'label' => '従業員数', 'name' => 'work_employee_count', 'type' => 'text'],
            ['key' => 'field_weegent_work_client_name', 'label' => '導入企業名', 'name' => 'work_client_name', 'type' => 'text'],
            ['key' => 'field_weegent_work_client_logo', 'label' => '導入企業ロゴ', 'name' => 'work_client_logo', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail'],
            [
                'key' => 'field_weegent_work_staff',
                'label' => '担当者',
                'name' => 'work_staff',
                'type' => 'user',
                'instructions' => '「ユーザー」に登録した担当者から選択します。未選択の場合、担当者の表示は出ません。',
                'allow_null' => 1,
                'multiple' => 0,
                'return_format' => 'id',
            ],
        ],
        'location' => [
            [
                ['param' => 'post_type', 'operator' => '==', 'value' => 'work'],
            ],
        ],
    ]);

    // 担当者情報。ユーザーのプロフィール編集画面に追加し、事例側は「担当者」欄(work_staff)で選ぶ。
    // 投稿者(記事を書いた人)とは別に選べるため、担当者は購読者権限のユーザーでもよい。
    acf_add_local_field_group([
        'key' => 'group_weegent_staff_profile',
        'title' => '担当者情報(事例詳細ページに表示)',
        'fields' => [
            ['key' => 'field_weegent_staff_role', 'label' => '役職', 'name' => 'staff_role', 'type' => 'text'],
            ['key' => 'field_weegent_staff_avatar', 'label' => 'プロフィール画像', 'name' => 'staff_avatar', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'thumbnail'],
            ['key' => 'field_weegent_staff_bio', 'label' => '紹介文', 'name' => 'staff_bio', 'type' => 'textarea', 'rows' => 4],
        ],
        'location' => [
            [
                ['param' => 'user_form', 'operator' => '==', 'value' => 'all'],
            ],
        ],
    ]);

    // メンバー(member)の詳細情報。氏名は投稿タイトルを使う。
    acf_add_local_field_group([
        'key' => 'group_weegent_member_details',
        'title' => 'メンバーの詳細情報',
        'fields' => [
            ['key' => 'field_weegent_member_role', 'label' => '役職', 'name' => 'member_role', 'type' => 'text', 'instructions' => '例）代表取締役'],
            ['key' => 'field_weegent_member_name_en', 'label' => '氏名(英語表記)', 'name' => 'member_name_en', 'type' => 'text', 'instructions' => '例）Yuta Matsushita'],
        ],
        'location' => [
            [
                ['param' => 'post_type', 'operator' => '==', 'value' => 'member'],
            ],
        ],
        'position' => 'acf_after_title',
    ]);

    // 動画(video)の詳細情報。タイトルは投稿タイトルを使う。
    // サムネイルは通常YouTubeから自動取得し、画像を設定した動画だけ差し替える。
    acf_add_local_field_group([
        'key' => 'group_weegent_video_details',
        'title' => '動画の詳細情報',
        'fields' => [
            [
                'key' => 'field_weegent_video_url',
                'label' => 'YouTubeのURL',
                'name' => 'video_url',
                'type' => 'url',
                'required' => 1,
                'instructions' => '例）https://www.youtube.com/watch?v=xxxxxxxxxxx（youtu.be / ショート動画のURLも可）',
            ],
            [
                'key' => 'field_weegent_video_channel',
                'label' => 'チャンネル名',
                'name' => 'video_channel',
                'type' => 'text',
                'default_value' => 'YouTube 松下雄太_SALESROOM',
                'instructions' => '入力した文字がそのままカードに表示されます。',
            ],
            [
                'key' => 'field_weegent_video_thumbnail',
                'label' => 'サムネイル画像(差し替える場合のみ)',
                'name' => 'video_thumbnail',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'instructions' => '未設定の場合はYouTubeのサムネイルを自動で表示します。16:9の画像を推奨します。',
            ],
        ],
        'location' => [
            [
                ['param' => 'post_type', 'operator' => '==', 'value' => 'video'],
            ],
        ],
        'position' => 'acf_after_title',
    ]);

    // お役立ち資料(document)の詳細情報。資料カード(カテゴリ/説明文/訴求ポイント)の表示に使う。
    // 訴求ポイントは最大3つ。空欄の項目はカードに表示しない。
    acf_add_local_field_group([
        'key' => 'group_weegent_document_details',
        'title' => '資料の詳細情報',
        'fields' => [
            [
                'key' => 'field_weegent_document_term',
                'label' => 'カテゴリ',
                'name' => 'document_term',
                'type' => 'taxonomy',
                'taxonomy' => 'document_category',
                'field_type' => 'radio',
                'allow_null' => 1,
                'add_term' => 1,
                'save_terms' => 1,
                'load_terms' => 1,
                'return_format' => 'object',
            ],
            ['key' => 'field_weegent_document_description', 'label' => '説明文', 'name' => 'document_description', 'type' => 'textarea', 'rows' => 3, 'new_lines' => ''],
            ['key' => 'field_weegent_document_point_1', 'label' => '訴求ポイント1', 'name' => 'document_point_1', 'type' => 'text'],
            ['key' => 'field_weegent_document_point_2', 'label' => '訴求ポイント2', 'name' => 'document_point_2', 'type' => 'text'],
            ['key' => 'field_weegent_document_point_3', 'label' => '訴求ポイント3', 'name' => 'document_point_3', 'type' => 'text'],
        ],
        'location' => [
            [
                ['param' => 'post_type', 'operator' => '==', 'value' => 'document'],
            ],
        ],
        'position' => 'acf_after_title',
    ]);
});

// --------------------------------
// ページごとの表示設定(ご支援実績・お役立ち資料・動画)
// --------------------------------
// トップ・サービス4ページに並ぶ「導入事例」「お役立ち資料」「動画」の3セクションは、
// 管理画面の各投稿タイプ(ご支援実績・お役立ち資料・動画)のメニュー内「ページごとの表示設定」で、ページごとに3件まで選ぶ。
// (ACF無料版ではオプションページが作れないため、テーマで設定画面を用意している)

// セクションを置いているページ。キーは設定の保存キーと、テンプレートパーツの 'page' 引数で共通利用する。
function weegent_featured_pages()
{
    return [
        'top' => 'トップ',
        'inbound' => 'インバウンド対応',
        'outbound-enterprise' => 'エンタープライズ開拓',
        'outbound-smb' => '営業戦略／組織立ち上げプラン',
        'test-marketing' => 'テストマーケティング',
    ];
}

// 表示設定を持つ投稿タイプ。option は選択内容を保存する wp_options のキー。
function weegent_featured_types()
{
    return [
        'work' => ['label' => 'ご支援実績', 'section' => '導入事例', 'option' => 'weegent_page_works'],
        'document' => ['label' => 'お役立ち資料', 'section' => 'お役立ち資料', 'option' => 'weegent_page_documents'],
        'video' => ['label' => '動画', 'section' => '動画で見る、Weegentの品質', 'option' => 'weegent_page_videos'],
    ];
}

// ページに表示する投稿。設定画面で選んだ順に返し、1件も選ばれていない
// (または選んだ投稿がすべて非公開・削除済みの)場合は新着にフォールバックする。
function weegent_get_featured_posts($post_type, $page_key, $limit = 3)
{
    $types = weegent_featured_types();
    $settings = isset($types[$post_type]) ? get_option($types[$post_type]['option'], []) : [];
    $ids = array_filter(array_map('absint', $settings[$page_key] ?? []));

    if ($ids) {
        $posts = get_posts([
            'post_type' => $post_type,
            'post__in' => $ids,
            'orderby' => 'post__in',
            'posts_per_page' => $limit,
        ]);
        if ($posts) {
            return $posts;
        }
    }

    return get_posts([
        'post_type' => $post_type,
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
}

add_action('admin_menu', function () {
    foreach (weegent_featured_types() as $post_type => $config) {
        add_submenu_page(
            'edit.php?post_type=' . $post_type,
            'ページごとの表示設定',
            'ページごとの表示設定',
            'edit_pages',
            'weegent-featured-' . $post_type,
            function () use ($post_type) {
                weegent_render_featured_screen($post_type);
            }
        );
    }
});

function weegent_render_featured_screen($post_type)
{
    $types = weegent_featured_types();
    if (! isset($types[$post_type]) || ! current_user_can('edit_pages')) {
        return;
    }

    $config = $types[$post_type];
    $pages = weegent_featured_pages();
    $slots = 3;
    $nonce_action = 'weegent_featured_' . $post_type;

    if (isset($_POST['weegent_featured']) && check_admin_referer($nonce_action)) {
        $input = (array) wp_unslash($_POST['weegent_featured']);
        $settings = [];
        foreach (array_keys($pages) as $key) {
            $ids = array_map('absint', (array) ($input[$key] ?? []));
            $ids = array_filter($ids, function ($id) use ($post_type) {
                return $id && get_post_type($id) === $post_type;
            });
            $settings[$key] = array_values(array_unique($ids));
        }
        update_option($config['option'], $settings, false);
        echo '<div class="notice notice-success is-dismissible"><p>保存しました。</p></div>';
    }

    $settings = get_option($config['option'], []);
    $posts = get_posts([
        'post_type' => $post_type,
        'post_status' => ['publish', 'draft', 'private'],
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
    ?>
    <div class="wrap">
        <h1><?php echo esc_html($config['label']); ?>：ページごとの表示設定</h1>
        <p>各ページの「<?php echo esc_html($config['section']); ?>」に表示する<?php echo esc_html($config['label']); ?>を、表示したい順に選んでください。<br>
            1つも選ばないページには、新着の<?php echo esc_html($config['label']); ?>3件が自動で表示されます。公開されていないものは表示されません。</p>

        <form method="post">
            <?php wp_nonce_field($nonce_action); ?>
            <table class="form-table" role="presentation">
                <?php foreach ($pages as $key => $label) :
                    $selected = $settings[$key] ?? [];
                    ?>
                    <tr>
                        <th scope="row"><?php echo esc_html($label); ?></th>
                        <td>
                            <?php for ($i = 0; $i < $slots; $i++) :
                                $current = (int) ($selected[$i] ?? 0);
                                ?>
                                <p>
                                    <label>
                                        <?php echo esc_html(($i + 1) . '番目'); ?>
                                        <select name="weegent_featured[<?php echo esc_attr($key); ?>][]" style="max-width: 100%;">
                                            <option value="0">（選択しない）</option>
                                            <?php foreach ($posts as $post) : ?>
                                                <option value="<?php echo esc_attr($post->ID); ?>" <?php selected($current, $post->ID); ?>>
                                                    <?php echo esc_html(get_the_title($post) . ($post->post_status !== 'publish' ? '（非公開）' : '')); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label>
                                </p>
                            <?php endfor; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php submit_button('保存する'); ?>
        </form>
    </div>
    <?php
}

// YouTubeのURLから動画IDを取り出す(watch?v= / youtu.be / shorts / embed / live に対応)。
function weegent_youtube_id($url)
{
    if (preg_match('~(?:youtube\.com/(?:watch\?(?:.*&)?v=|shorts/|embed/|live/)|youtu\.be/)([A-Za-z0-9_-]{11})~', (string) $url, $m)) {
        return $m[1];
    }
    return '';
}

// YouTubeのサムネイルURL。高解像度版(maxresdefault)は動画によって存在しないため、
// 初回にだけ存在を確認し、結果を動画投稿のメタに保存して使い回す。
function weegent_youtube_thumbnail_url($post_id, $youtube_id)
{
    $cache = get_post_meta($post_id, '_weegent_youtube_thumb', true);
    if (is_array($cache) && ($cache['id'] ?? '') === $youtube_id) {
        return $cache['url'];
    }

    $maxres = 'https://i.ytimg.com/vi/' . $youtube_id . '/maxresdefault.jpg';
    $response = wp_remote_head($maxres, ['timeout' => 3]);
    if (is_wp_error($response)) {
        // 通信エラー時は保存せず、次回の表示で再確認する
        return 'https://i.ytimg.com/vi/' . $youtube_id . '/hqdefault.jpg';
    }

    $url = wp_remote_retrieve_response_code($response) === 200
        ? $maxres
        : 'https://i.ytimg.com/vi/' . $youtube_id . '/hqdefault.jpg';
    update_post_meta($post_id, '_weegent_youtube_thumb', ['id' => $youtube_id, 'url' => $url]);

    return $url;
}

// 動画カードの表示データ。サムネイルは差し替え画像があればそれ(thumbnail_id)、
// なければYouTubeのサムネイル(thumbnail_url)を使う。URLからYouTubeの動画IDを
// 読み取れない場合は、ロゴ入りのプレースホルダー画像にする。
function weegent_get_video_card($video)
{
    $video = get_post($video);
    $get = function ($name) use ($video) {
        return function_exists('get_field') ? get_field($name, $video->ID) : '';
    };

    $url = trim((string) $get('video_url'));
    $youtube_id = weegent_youtube_id($url);
    $thumbnail_id = (int) $get('video_thumbnail');

    return [
        'title' => get_the_title($video),
        'url' => $url,
        'channel' => trim((string) $get('video_channel')),
        'thumbnail_id' => $thumbnail_id,
        'thumbnail_url' => (! $thumbnail_id && $youtube_id)
            ? weegent_youtube_thumbnail_url($video->ID, $youtube_id)
            : get_template_directory_uri() . '/img/work-detail/weegent-placeholder.jpg',
    ];
}

// 公式YouTubeチャンネルのURL(動画セクションのボタン・フッターのアイコンで共通利用)。
function weegent_youtube_channel_url()
{
    return 'https://www.youtube.com/channel/UC1WoGq5RaDJnZwJPJphz8pw';
}

// 事例詳細サイドバーの「ご支援実績」。同じ事例カテゴリの事例をランダムに選び、
// $limit 件に満たない分は、それ以外の事例からランダムに補う。表示中の事例は除く。
function weegent_get_related_works($post_id, $limit = 5)
{
    $exclude = [(int) $post_id];
    $term_ids = wp_get_post_terms($post_id, 'work_category', ['fields' => 'ids']);
    $works = [];

    if (! empty($term_ids) && ! is_wp_error($term_ids)) {
        $works = get_posts([
            'post_type' => 'work',
            'posts_per_page' => $limit,
            'post__not_in' => $exclude,
            'orderby' => 'rand',
            'tax_query' => [
                ['taxonomy' => 'work_category', 'terms' => $term_ids],
            ],
        ]);
    }

    if (count($works) < $limit) {
        $works = array_merge($works, get_posts([
            'post_type' => 'work',
            'posts_per_page' => $limit - count($works),
            'post__not_in' => array_merge($exclude, wp_list_pluck($works, 'ID')),
            'orderby' => 'rand',
        ]));
    }

    return $works;
}

// 資料カードの表示データ。カテゴリは資料カテゴリの先頭1件、訴求ポイントは空欄を除いて返す。
function weegent_get_document_card($document)
{
    $document = get_post($document);
    $terms = get_the_terms($document, 'document_category');
    $get = function ($name) use ($document) {
        return function_exists('get_field') ? trim((string) get_field($name, $document->ID)) : '';
    };

    return [
        'category' => (! empty($terms) && ! is_wp_error($terms)) ? $terms[0]->name : '',
        'description' => $get('document_description'),
        'points' => array_values(array_filter([
            $get('document_point_1'),
            $get('document_point_2'),
            $get('document_point_3'),
        ], 'strlen')),
        'thumbnail' => get_the_post_thumbnail_url($document, 'large') ?: get_template_directory_uri() . '/img/document/document-client-work-01.jpg',
    ];
}

// お役立ち資料は詳細ページを持たないため、個別URLへのアクセスは資料DLフォームへ転送する。
add_action('template_redirect', function () {
    if (is_singular('document')) {
        wp_safe_redirect(weegent_resource_download_url(get_queried_object_id()), 301);
        exit;
    }
});

// メンバーは一覧ページを持たないため、/member/ へのアクセスは会社情報の役員紹介へ転送する。
add_action('template_redirect', function () {
    if (is_404() && trim((string) wp_parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/') === 'member') {
        wp_safe_redirect(home_url('/company/#officer'), 301);
        exit;
    }
});

// メンバーページの構造化データ(ProfilePage / Person)。
// 氏名で検索された際に、検索エンジンへ「この人物のプロフィールページ」であることを伝える。
add_action('wp_head', function () {
    if (! is_singular('member')) {
        return;
    }

    $post_id = get_queried_object_id();
    $person = [
        '@type' => 'Person',
        'name' => get_the_title($post_id),
        'url' => get_permalink($post_id),
        'worksFor' => [
            '@type' => 'Organization',
            'name' => '株式会社Weegent',
            'url' => home_url('/'),
        ],
    ];

    $role = function_exists('get_field') ? get_field('member_role', $post_id) : '';
    if ($role) {
        $person['jobTitle'] = $role;
    }
    $name_en = function_exists('get_field') ? get_field('member_name_en', $post_id) : '';
    if ($name_en) {
        $person['alternateName'] = $name_en;
    }
    if (has_post_thumbnail($post_id)) {
        $person['image'] = get_the_post_thumbnail_url($post_id, 'full');
    }

    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfilePage',
        'url' => get_permalink($post_id),
        'dateModified' => get_the_modified_date('c', $post_id),
        'mainEntity' => $person,
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
});

// 転送されるだけの資料個別URLはサイトマップに載せない。
add_filter('wp_sitemaps_post_types', function ($post_types) {
    unset($post_types['document']);
    return $post_types;
});

// 投稿者ページ(/author/{ユーザー名}/)は使わない。URLにログインIDが出るため、サイトマップから外し、
// アクセスはトップへ転送する。?author=1 から投稿者ページへの自動転送でIDが漏れないよう、
// WordPress標準の転送(redirect_canonical)より先に処理する。
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
    return $name === 'users' ? false : $provider;
}, 10, 2);

add_action('template_redirect', function () {
    if (is_author() || isset($_GET['author'])) {
        wp_safe_redirect(home_url('/'), 301);
        exit;
    }
}, 1);

// ユーザーに紐づく担当者情報。名前は表示名、画像は未設定ならプレースホルダーにフォールバックする。
// ユーザーが未選択・削除済みの場合は null を返す。
function weegent_get_staff_profile($user_id)
{
    $user = $user_id ? get_userdata((int) $user_id) : false;
    if (! $user) {
        return null;
    }

    $acf_id = 'user_' . $user->ID;
    $get = function ($name) use ($acf_id) {
        return function_exists('get_field') ? get_field($name, $acf_id) : '';
    };

    return [
        'name' => $user->display_name,
        'role' => $get('staff_role'),
        'avatar' => $get('staff_avatar') ?: get_template_directory_uri() . '/img/work-detail/weegent-placeholder.jpg',
        'bio' => $get('staff_bio'),
    ];
}

// sass/*.scss は body の .page-xxx クラスを起点にページ固有のスタイルを当てている
// (例: .page-form, .page-thanks, .page-privacy)。静的サイトのクラス名を再現する。
function my_body_class($classes)
{
    $page = is_page() ? get_post() : null;
    $parent_slug = ($page && $page->post_parent)
        ? get_post_field('post_name', $page->post_parent)
        : '';

    if (is_front_page()) {
        $classes[] = 'page-top';
    } elseif (is_page(['contact', 'document-download', 'case-download', 'resource-download'])) {
        $classes[] = 'page-form';
    } elseif (
        is_page(['contact-thanks', 'document-download-thanks', 'case-download-thanks', 'resource-download-thanks'])
        || ($page && $page->post_name === 'thanks' && in_array($parent_slug, ['contact', 'document-download', 'case-download', 'resource-download'], true))
    ) {
        $classes[] = 'page-thanks';
    } elseif (is_page('privacy-policy')) {
        $classes[] = 'page-privacy';
    } elseif (is_page()) {
        $classes[] = 'page-' . $page->post_name;
    } elseif (is_post_type_archive('document')) {
        $classes[] = 'page-document';
    } elseif (is_post_type_archive('work')) {
        $classes[] = 'page-archive-work';
    } elseif (is_singular('work')) {
        $classes[] = 'page-single-work';
    } elseif (is_singular('member')) {
        $classes[] = 'page-single-member';
    } elseif (is_home() || is_category()) {
        $classes[] = 'page-archive-news';
    } elseif (is_singular('post')) {
        $classes[] = 'page-single-news';
    }
    return $classes;
}
add_filter('body_class', 'my_body_class');


function enqueue_custom_styles_and_scripts() {
    $style_path  = get_template_directory() . '/css/style.css';
    $script_path = get_template_directory() . '/js/script.js';

    // Google Fonts
    wp_enqueue_style( 'google-fonts-preconnect', 'https://fonts.googleapis.com', [], null );
    wp_enqueue_style( 'google-fonts-preconnect-gstatic', 'https://fonts.gstatic.com', [], null );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&family=Noto+Serif+JP:wght@500&display=swap', [], null );

    // Main Stylesheet
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', [], file_exists( $style_path ) ? filemtime( $style_path ) : null );

    // jQuery
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.7.1.min.js', [], null, true );

    // Custom Script
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', ['jquery-cdn'], file_exists( $script_path ) ? filemtime( $script_path ) : null, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts' );

// Table of Contents Plus 自体のCSSは読み込まない(見た目は sass/_single-work.scss 側で
// #toc_container 等に直接当てている)。開閉の動きはプラグイン本体のJS(front.js)に任せる。
// ハンドル名はバージョンによって変わる可能性があるため、実際に競合するCSSが
// 表示されている場合はブラウザの開発者ツールでハンドル名を確認して調整すること。
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('toc-screen');
    wp_deregister_style('toc-screen');
}, 20);

// --------------------------------
// Contact Form 7
// --------------------------------
// テンプレートから呼び出すCF7フォーム。管理画面のフォームは「タイトル」で紐付けるため、
// CF7側でタイトルを変更するとフォームが表示されなくなる点に注意。
// thanks は送信完了後の遷移先。
function weegent_forms()
{
    return [
        'contact' => ['title' => 'お問い合わせ', 'thanks' => '/contact/thanks/'],
        'document-download' => ['title' => '資料3点セットダウンロード', 'thanks' => '/document-download/thanks/'],
        'case-download' => ['title' => '事例集ダウンロード', 'thanks' => '/case-download/thanks/'],
        'resource-download' => ['title' => 'お役立ち資料ダウンロード', 'thanks' => '/resource-download/thanks/'],
    ];
}

function weegent_get_cf7_form($key)
{
    $forms = weegent_forms();
    if (! isset($forms[$key]) || ! function_exists('wpcf7_get_contact_form_by_title')) {
        return null;
    }
    return wpcf7_get_contact_form_by_title($forms[$key]['title']);
}

// フォームを出力する。$html_class は <form> に付くクラス(既存のフォームデザインのクラスを渡す)。
function weegent_contact_form($key, $html_class = 'form-panel')
{
    $form = weegent_get_cf7_form($key);

    if (! $form) {
        if (current_user_can('edit_posts')) {
            $forms = weegent_forms();
            $title = $forms[$key]['title'] ?? $key;
            echo '<p class="form-panel">Contact Form 7 にタイトル「' . esc_html($title) . '」のフォームが見つかりません。</p>';
        }
        return;
    }

    echo do_shortcode(sprintf('[contact-form-7 id="%d" html_class="%s"]', $form->id(), esc_attr($html_class)));
}

// フォームを置いているページか。お問い合わせ・DLフォームの各ページと、
// 相談フォームを置いているDL系のthanksページが対象。
function weegent_has_cf7_form()
{
    if (is_page(['contact', 'document-download', 'case-download', 'resource-download'])) {
        return true;
    }

    $page = is_page() ? get_post() : null;
    if (! $page || $page->post_name !== 'thanks' || ! $page->post_parent) {
        return false;
    }

    return in_array(get_post_field('post_name', $page->post_parent), ['document-download', 'case-download', 'resource-download'], true);
}

// CF7のJS/CSSはフォームのあるページだけで読み込む。
add_filter('wpcf7_load_js', function ($load) {
    return $load && weegent_has_cf7_form();
});
add_filter('wpcf7_load_css', function ($load) {
    return $load && weegent_has_cf7_form();
});

// reCAPTCHA(v3)はCF7が全ページで読み込むため、フォームのないページでは外す
// (右下のバッジもフォームのあるページだけに表示される)。CF7側の登録(優先度20)より後に実行する。
add_action('wp_enqueue_scripts', function () {
    if (! weegent_has_cf7_form()) {
        wp_dequeue_script('wpcf7-recaptcha');
        wp_dequeue_script('google-recaptcha');
    }
}, 21);

// フォーム本文はHTMLで組むため、CF7の自動整形(<p>/<br>の挿入)は使わない。
// メール本文(HTML形式のメール)は自動整形で改行を<br>にするため、フォームだけを対象にする。
add_filter('wpcf7_autop_or_not', function ($autop, $options) {
    return ($options['for'] ?? 'form') === 'mail' ? $autop : false;
}, 10, 2);

// 既存デザインの送信ボタン(アイコン付きの<button>)を出すフォームタグ。
// CF7のフォーム編集画面で [weegent_submit "問い合わせる" free] のように使う。
// free を付けると「無料」バッジを表示する。
add_action('wpcf7_init', function () {
    wpcf7_add_form_tag('weegent_submit', function ($tag) {
        $label = $tag->values[0] ?? '送信する';
        $badge = $tag->has_option('free') ? ' <small>無料</small>' : '';

        return sprintf(
            '<button class="c-button c-button--brown form-panel__submit" type="submit"><span>%s%s</span><img src="%s" alt=""></button>',
            esc_html($label),
            $badge,
            esc_url(get_template_directory_uri() . '/img/common/button-icon-white.svg')
        );
    });
});

// お役立ち資料フォーム用のメールタグ [_document_title]。
// フォームの [hidden document_id default:get] で受け取った資料IDを検証し、資料名に変換する。
// ID指定なし(「すべての資料をダウンロード」から来た場合)は一括請求の旨を返す。
add_filter('wpcf7_special_mail_tags', function ($output, $name, $html) {
    if ($name !== '_document_title') {
        return $output;
    }

    $submission = WPCF7_Submission::get_instance();
    $document_id = $submission ? absint($submission->get_posted_data('document_id')) : 0;
    $document = $document_id ? get_post($document_id) : null;

    if (! $document || $document->post_type !== 'document' || $document->post_status !== 'publish') {
        return 'すべてのお役立ち資料（一括請求）';
    }

    return get_the_title($document);
}, 10, 3);

// 送信完了後、フォームごとのthanksページへ遷移する。
// 送信元のページではなくフォームで判定するため、thanksページ内の相談フォームも /contact/thanks/ へ遷移する。
add_action('wp_footer', function () {
    if (! weegent_has_cf7_form()) {
        return;
    }

    $routes = [];
    foreach (weegent_forms() as $key => $config) {
        $form = weegent_get_cf7_form($key);
        if ($form) {
            $routes[$form->id()] = esc_url_raw(home_url($config['thanks']));
        }
    }
    ?>
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            var routes = <?php echo wp_json_encode($routes); ?>;
            var url = routes[event.detail.contactFormId];
            if (url) {
                window.location.href = url;
            }
        }, false);
    </script>
    <?php
});
