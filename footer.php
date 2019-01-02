
    </main>

    <footer class="Footer">

        <section class="MainSeccionWidgets NotFullWidth Col-4">
            <article>
                <?php
                if ( is_active_sidebar('footer_sidebar_one')):
                    dynamic_sidebar('footer_sidebar_one');
                endif;
                ?>
            </article>

            <article>
                <?php
                if ( is_active_sidebar('footer_sidebar_two')):
                    dynamic_sidebar('footer_sidebar_two');
                endif;
                ?>
            </article>

            <article>
                <?php
                if ( is_active_sidebar('footer_sidebar_three')):
                    dynamic_sidebar('footer_sidebar_three');
                endif;
                ?>
            </article>

            <article>
                <?php
                if ( is_active_sidebar('footer_sidebar_four')):
                    dynamic_sidebar('footer_sidebar_four');
                endif;
                ?>
            ?>
            </article>

        </section>
        <small class="Copyright">DON LINO BRUJO PACTADO Es una Marca Patentada y Registrada en INDECOPI - DISEÑADO POR: <a href="http://franklinbelen.com">Franklin Belen</a></small>

        <?php wp_footer(); ?>
    </footer>
</body>
</html>