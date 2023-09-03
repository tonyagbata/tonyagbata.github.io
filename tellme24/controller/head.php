<div id="google_translate_element"></div>

<section id="landing_loader">
    <img src="icons/favicon.png" alt="tell me">
</section>

<section class="app_header">

    <ul>
        <li>
            <img onclick="reloadlanding()" src="icons/logo.png" alt="logo" loading="eager">
        </li>

        <?php
        if (isset($_SESSION["user"])) {
            echo '
                            <li>
                                <form id="search_container">
                                <input id="search_input" type="search" placeholder="Search" spellcheck="false"/>
                                <button onclick="searchApp(this)">&#128269;</button>
                                </form>
                            </li>

                            <li>
                                <a  href="home?id=view&desc=' . $_SESSION["user"] . '" id="userIcon">&#9778;</a>
                            </li>
                            ';
        } else {
            echo '
                            <li>
                                <a  href="#" onclick="createAccount(this)">Sign in</a>
                            </li>
                            ';
        }
        ?>
    </ul>

</section>