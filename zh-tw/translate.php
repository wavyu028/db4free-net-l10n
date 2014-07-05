<?php
/*
Section: translate
Language: Traditional Chinese 繁體中文
Translator: Trey Lin
*/

$translations = array(
    'h1' => '翻譯',

    'p1a' => '我們在2014年對 db4free.net 網站及資料庫服務的更新，現在有了簡單的方法讓你協助 db4free.net 網站翻譯至更多語言！',

    'p1b' => '網站內的所有文字都在 <a href="https://github.com/">GitHub</a>。 你可以從上面fork一份到自己的repository，完成你的翻譯接著送出 pull request 以供網站可以整合你的翻譯。',

    'h2' => '怎麼做？',

    'p2a' => '首先，如果你沒有GitHub帳號的話，你必須先註冊一個 GitHub 帳號。 於以下網址Fork一份到自己的repository ',

    'p2b' => '<a href="https://github.com/mpopp75/db4free-net-l10n">https://github.com/mpopp75/db4free-net-l10n</a>',

    'p2c' => ' 你的帳號內就有一份與線上一樣的repository。 接著你可以clone一份資料到你的電腦上。 Git 指令是:',

    'p2d' => 'git clone git@github.com:[你的GitHub帳號]/db4free-net-l10n.git',

    'p2e' => '我們建議你另外建立一個分支存放翻譯版本，範例指令如下：',

    'p2f' => 'git checkout -b mytranslations',

    'p2g' => '如果專案內缺少你欲翻譯語言的資料夾，請從"en"資料夾複製一份，資料夾名稱請參考語言代碼表： <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1 language codes</a>.',

    'p2h' => '翻譯時，你可以將英文原文以翻譯文字覆蓋。 但要注意不可更改到ID的屬性。 替換範例如下：',

    'p2i' => '\'h1\' => \'Welcome to db4free.net\',',

    'p2j' => 'by',

    'p2k' => '\'h1\' => \'Bienvenido a db4free.net\',',

    'p2l' => '如果遇到與原文一樣意思的文字，你可以刪除或者保留。',

    'p2m' => '當你完成翻譯時，commit 及 push 文件到你的 GitHub repository。 切換到你的翻譯分支並按下 "New Pull Request"。 輸入簡短翻譯語言、描述及任何遇到的困難或者任何無法完成的部分等，接著送出 Pull Request。',

    'p2n' => '如果你想貢獻一份心力，但卻遇到困難不知道從何開始，請於 GitHub <a href="https://github.com/mpopp75/db4free-net-l10n/issues">Open a Ticket</a>.',
);
?>