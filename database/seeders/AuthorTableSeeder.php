<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->full_name = "جورج صليبا";
        $author->save();
        $author->translateOrNew("ar")->about_author =  'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.';
        $author->translateOrNew("en")->about_author = 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.';
        $author->translateOrNew("ch")->about_author = '一個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。';
        $author->save();


        $author = new Author();
        $author->full_name = "حافظ ابراهيم";
        $author->save();
        $author->translateOrNew("ar")->about_author =  'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.';
        $author->translateOrNew("en")->about_author = 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.';
        $author->translateOrNew("ch")->about_author = '一個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。';
        $author->save();



        $author = new Author();
        $author->full_name = "سلامه موسي";
        $author->save();
        $author->translateOrNew("ar")->about_author =  'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.';
        $author->translateOrNew("en")->about_author = 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.';
        $author->translateOrNew("ch")->about_author = '一個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。';
        $author->save();


        $author = new Author();
        $author->full_name = "طه حسين";
        $author->save();
        $author->translateOrNew("ar")->about_author =  'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.';
        $author->translateOrNew("en")->about_author = 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.';
        $author->translateOrNew("ch")->about_author = '一個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。';
        $author->save();






    }
}
