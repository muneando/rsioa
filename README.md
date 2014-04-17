rsioa
=====

アパート入居状態情報サイト（Room status information of the apartment.）

## 概要

* アパートの部屋状況情報を参照できるサイトを構築できます。
* アパートのオーナー向けです。
* 複数の不動産会社のアパート物件を紹介しているときに、アパートの現在紹介してもよい部屋を参照できます。
* Evernoteとデータを同期します。

## 環境

CentOS6.4上で開発していきます。

* Apache
* MySQL
* PHP
* CakePHP2

Vagrant+VirtualBoxでの開発環境の提供を支援します。開発環境は、Chefで構築できます。

* Vagrant
* Chef Client
* Berkshelf


## 開発環境の設置

* Vagrant + Chef soloで開発環境を構築できます。

  ```
  $ berks install --path chef/cookbooks
  $ vagrant up
  ```

## 開発環境にアクセス

* ホスト側の/etc/hosts(WindowsならC:\Windows\System32\drivers\etc\hostsを管理者モードで編集) にIPアドレスとホスト名を追加します。

  ```
  192.168.33.15 rsioa
  ```

* Vagrantで仮想サーバーを起動します。同時にApache+PHP+MySQLの環境をインストールします。

  ```
  $ vagrant up
  ```

* phpMyAdminは次のような設定で使用可能です。

  <table>
    <tr>
        <td>URL</td>
        <td>http://rsioa/phpmyadmin/ </td>
    </tr>
     <tr>
        <td>ID</td>
        <td>root</td>
    </tr>
    <tr>
        <td>パスワード</td>
        <td>rsioa</td>
    </tr>
  </table>
 
* http://rsioa/ で開発環境にアクセスできます。



## Evernoteのノートの準備

* 「アパート」という名前のノートブックを作成する。
* 「アパート」ノートブックに物件の部屋ごとのノートを作成する。タイトルは「物件名：部屋番号」とする。
* 空き部屋の場合は、「未入居」タグを付ける。入居しているときは、「入力済み」タグを付ける。

以上のノートブック、ノート、タグの名前は、システムの環境設定で変更可能である。

* 部屋ごとのノートには、その部屋に関する情報（対応情報、覚え書き、入居者メモなど）記述することができる。
* 情報はサイトにアップされてないので、オーナーのEvernoteのみで参照可能である。

## その他

開発を開始します。現在、仕様の確定中。
