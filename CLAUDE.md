# CLAUDE.md

G-worth 専用の WordPress テーマ(テーマ名: G-worth)。

## プロジェクト構成

- ルート直下の `*.php`: WordPress テンプレート
  - 共通: `header.php`, `footer.php`, `functions.php`
  - トップ・一覧・詳細: `front-page.php`, `index.php`, `archive.php`, `single.php`, `404.php`
  - 固定ページ: `page.php`, `page-<スラッグ>.php`(company, mission, recruit, sales, sns-marketing, oa-biz, smart-house)
- `scss/`: SCSS ソース(`common.scss`, `top.scss`, `second.scss` と `layout/`, `include/`)
- `css/`: SCSS のコンパイル結果(`common.css`, `top.css`, `second.css`)
- `js/common.js`: 共通 JavaScript
- `include/`: テンプレートから読み込むパーツ
- `images/`: 画像
- `old/`, `include/old/`: 旧バージョンの退避ファイル。基本的に編集しない

## 開発ルール

- スタイルは `scss/` を編集し、`css/` に反映する。`css/` を直接編集しない
- `functions.php` で CSS/JS を読み込む。トップページは `top.css`、それ以外は `second.css` を使う
- 投稿のアーカイブとパーマリンクは `/topics/` 配下(`functions.php` で設定)
- 固定ページ用テンプレートはスラッグ名に合わせる(`page-<スラッグ>.php`)
- `* copy.php` はコピーファイル。新規作業では使わない
- 日本語のコメントとテキストは UTF-8 で扱う

## Git 運用ルール

- リモートリポジトリ: https://github.com/ryojisawada/gworth.git
- **コードを変更するたびに、コミットして GitHub にプッシュする**
- コミットは変更内容ごとに分け、メッセージには何を変更したかを簡潔に書く
- プッシュ前に `git status` と `git diff` で意図しないファイルが含まれていないか確認する
- `git push --force` など履歴を書き換える操作は、ユーザーの明示的な指示がない限り行わない
