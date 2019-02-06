<?php

/* E:\xampp\htdocs\octocms/themes/kenshin-kenshinschool/pages/blog/kalkulator.htm */
class __TwigTemplate_f43fe95afb68981dc2df95f642b31406d4b7a333add38f4c1b28dbd4fce10540 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-detailpage tg-newsdetailpage\">
                            <article class=\"tg-themepost tg-newspost\">
                                <div class=\"tg-themepostcontent\">
                                    <div class=\"tg-themeposttitle\">
                                        <h1>Aplikasi Kalkulator Sederhana dengan GFT</h1>
                                    </div>
                                    
                                </div>
                                <figure class=\"tg-featuredimg\"><img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campus.jpg");
        echo "\" alt=\"image description\"></figure>
                                <div class=\"tg-description\">
                                    <p>Artikel berikut ini merupakan contoh penerapan framework GFT untuk membuat aplikasi kalkulator sederhana.  Pembuatan aplikasi kalkulator ini dilakukan dengan menulis kode program secara manual (on the scratch) tidak memanfaatkan drag-drop komponen dari pallete swing.  Tujuan yang diharapkan adalah kode akan lebih rapi dan pemahaman terhadap kerja java akan lebih baik.</p>
                                    <p>Penerapan disiplin framework GFT (Grammatical Fast Track) memberikan tahapan-tahapan dalam membangun aplikasi software sebagai berikut:</p>
                                    <div class=\"icon-caret-right\">
                                        <ul>
                                            <li>Memisahkan fungsi engine aplikasi dan presentasi (dalam hal ini perlu dibuat Logik kalkulator dan GUI Kalkulator scr terpisah)</li>
                                            <li>Lakukan analisa terhadap fungsi kerja kalkulator dari sisi fungsi operasional selanjutnya desain class logik kalkulator</li>
                                            <li>Desain Class CalcLogic sebagai engine kalkulator</li>
                                            <li>Test unit CalcLogic sehingga memenuhi fungsi sebagai kalkulator</li>
                                            <li>Desain mock up presentasi kalkulator (swing) tersendiri (Class CalcGUI)</li>
                                            <li>Bagian yang tersulit Interaksi dinamis antara Mock Up ClacGUI dengan logik kalkulator CalcLogic</li>
                                        </ul>
                                 </div>
                                 <br>
                                 <b>Memisahkan Engine dan presentasi pada kalkulator</b>
                                 <br>
                                    <p>Pada tahap ini merupakan observasi terhadap fungsi kalkulator.  Ingat tanpa kalkulator sebenarnya kita juga bisa menghitung.  Hal ini berarti kita sendiripun mempunyai engine kalkulator.   Perhatikan Gambar di bawah, pada awalnya _currentTotal = 0.  Setiap operasi hitung (+,-,*,/,=) mempunyai satu operand yang akan dioperasikan dengan _currentTotal sebelumnya.</p>
                                    <br>
                                    Title : analisa kalkulator
                                    <br>
                                    <br>
                                    <br>
                                    /*<br>
                                     * Silahkan didistribusikan<br>
                                     * Mudah-mudahan bermanfaat<br>
                                     */<br><br>
                                    
                                    /*<br>
                                     * @author nurudin at Inhuaschool akademic<br>
                                     * http://inhuaschool.com<br>
                                     */<br><br>
                                     
                                     //Class CalcLogic murni engine kalkulator dan tidak boleh ada komponen Window (UI)<br>
                                    public class CalcLogic {<br><br>
                                    \t
                                    \tprivate int _currentTotal;<br><br>
                                    \t
                                    \tpublic CalcLogic () {<br>
                                    \t\t_currentTotal =0;<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void tambah (String n) {<br>
                                    \t\t_currentTotal += convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void kurang (String n) {<br>
                                    \t\t_currentTotal -= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void kali (String n) {<br>
                                    \t\t_currentTotal *= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void bagi (String n) {<br>
                                    \t\t_currentTotal /= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic int convertToNumber (String n) {<br>
                                    \t\treturn Integer.parseInt(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void setTotal (String n) {<br>
                                    \t\t_currentTotal = convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic String getTotalString () {<br>
                                    \t\treturn \"\" + _currentTotal;<br>
                                    \t}<br><br>
                                    \t
                                    }<br>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>




                ";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_left.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "

            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/pages/blog/kalkulator.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 99,  125 => 98,  42 => 18,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-detailpage tg-newsdetailpage\">
                            <article class=\"tg-themepost tg-newspost\">
                                <div class=\"tg-themepostcontent\">
                                    <div class=\"tg-themeposttitle\">
                                        <h1>Aplikasi Kalkulator Sederhana dengan GFT</h1>
                                    </div>
                                    
                                </div>
                                <figure class=\"tg-featuredimg\"><img src=\"{{'assets/images/campus.jpg'|theme}}\" alt=\"image description\"></figure>
                                <div class=\"tg-description\">
                                    <p>Artikel berikut ini merupakan contoh penerapan framework GFT untuk membuat aplikasi kalkulator sederhana.  Pembuatan aplikasi kalkulator ini dilakukan dengan menulis kode program secara manual (on the scratch) tidak memanfaatkan drag-drop komponen dari pallete swing.  Tujuan yang diharapkan adalah kode akan lebih rapi dan pemahaman terhadap kerja java akan lebih baik.</p>
                                    <p>Penerapan disiplin framework GFT (Grammatical Fast Track) memberikan tahapan-tahapan dalam membangun aplikasi software sebagai berikut:</p>
                                    <div class=\"icon-caret-right\">
                                        <ul>
                                            <li>Memisahkan fungsi engine aplikasi dan presentasi (dalam hal ini perlu dibuat Logik kalkulator dan GUI Kalkulator scr terpisah)</li>
                                            <li>Lakukan analisa terhadap fungsi kerja kalkulator dari sisi fungsi operasional selanjutnya desain class logik kalkulator</li>
                                            <li>Desain Class CalcLogic sebagai engine kalkulator</li>
                                            <li>Test unit CalcLogic sehingga memenuhi fungsi sebagai kalkulator</li>
                                            <li>Desain mock up presentasi kalkulator (swing) tersendiri (Class CalcGUI)</li>
                                            <li>Bagian yang tersulit Interaksi dinamis antara Mock Up ClacGUI dengan logik kalkulator CalcLogic</li>
                                        </ul>
                                 </div>
                                 <br>
                                 <b>Memisahkan Engine dan presentasi pada kalkulator</b>
                                 <br>
                                    <p>Pada tahap ini merupakan observasi terhadap fungsi kalkulator.  Ingat tanpa kalkulator sebenarnya kita juga bisa menghitung.  Hal ini berarti kita sendiripun mempunyai engine kalkulator.   Perhatikan Gambar di bawah, pada awalnya _currentTotal = 0.  Setiap operasi hitung (+,-,*,/,=) mempunyai satu operand yang akan dioperasikan dengan _currentTotal sebelumnya.</p>
                                    <br>
                                    Title : analisa kalkulator
                                    <br>
                                    <br>
                                    <br>
                                    /*<br>
                                     * Silahkan didistribusikan<br>
                                     * Mudah-mudahan bermanfaat<br>
                                     */<br><br>
                                    
                                    /*<br>
                                     * @author nurudin at Inhuaschool akademic<br>
                                     * http://inhuaschool.com<br>
                                     */<br><br>
                                     
                                     //Class CalcLogic murni engine kalkulator dan tidak boleh ada komponen Window (UI)<br>
                                    public class CalcLogic {<br><br>
                                    \t
                                    \tprivate int _currentTotal;<br><br>
                                    \t
                                    \tpublic CalcLogic () {<br>
                                    \t\t_currentTotal =0;<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void tambah (String n) {<br>
                                    \t\t_currentTotal += convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void kurang (String n) {<br>
                                    \t\t_currentTotal -= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void kali (String n) {<br>
                                    \t\t_currentTotal *= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void bagi (String n) {<br>
                                    \t\t_currentTotal /= convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic int convertToNumber (String n) {<br>
                                    \t\treturn Integer.parseInt(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic void setTotal (String n) {<br>
                                    \t\t_currentTotal = convertToNumber(n);<br>
                                    \t}<br><br>
                                    \t
                                    \tpublic String getTotalString () {<br>
                                    \t\treturn \"\" + _currentTotal;<br>
                                    \t}<br><br>
                                    \t
                                    }<br>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>




                {% partial 'sidebar_left.htm' %}


            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/pages/blog/kalkulator.htm", "");
    }
}
