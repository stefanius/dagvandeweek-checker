<?php

class RedirectedPageChecker extends Stefanius\WebChecker\Checker\WebCheck
{
    private function execute($uri, $redirectTo, $pageTitle)
    {
        $this->visit('http://dagvandeweek.nl' . $uri)
            ->seePageIs('http://dagvandeweek.nl' . $redirectTo)
            ->seePageIsRedirected()
            ->pageTitleIs($pageTitle);
    }

    public function checkFaultyHistoryPagesRedirects()
    {
        $redirects = [
            //By year
            ['/histories/historie/1911', '/historie/1911', 'Historie 1911'],
            ['/histories/historie/1944', '/historie/1944', 'Historie 1944'],
            ['/histories/historie/1980', '/historie/1980', 'Historie 1980'],
            ['/histories/historie/1990', '/historie/1990', 'Historie 1990'],
            ['/histories/historie/2000', '/historie/2000', 'Historie 2000'],
            ['/histories/historie/2001', '/historie/2001', 'Historie 2001'],
            //By year and month
            ['/histories/historie/1912/04', '/historie/1912/04', 'Geschiedenis van april 1912'],
            ['/histories/historie/1948/07', '/historie/1948/07', 'Geschiedenis van juli 1948'],
            ['/histories/historie/1959/08', '/historie/1959/08', 'Geschiedenis van augustus 1959'],
            ['/histories/historie/1990/08', '/historie/1990/08', 'Geschiedenis van augustus 1990'],
        ];

        foreach ($redirects as $redirect) {
            $this->execute($redirect[0], $redirect[1], $redirect[2]);
        }
    }
}


/*
 *
#Pages

#misc
rewrite ^/index.html / permanent;
rewrite ^/historie/index.html / permanent;
rewrite ^/nieuws/index.html / permanent;
rewrite ^/kalender/index.html / permanent;
rewrite ^/kalender/-1 /kalender permanent;
rewrite ^/kalender/-2 /kalender permanent;
rewrite ^/kalender/-3 /kalender permanent;
rewrite ^/kalender/-4 /kalender permanent;
rewrite ^/kalender/-5 /kalender permanent;
rewrite ^/kalender/-6 /kalender permanent;
rewrite ^/kalender/-7 /kalender permanent;
rewrite ^/kalender/-8 /kalender permanent;
rewrite ^/kalender/-9 /kalender permanent;
rewrite ^/kalender/-10 /kalender permanent;
rewrite ^/historie/1909/00/01/index.html / permanent;
rewrite ^/historie/1909/00/index.html / permanent;
rewrite ^/historie/1909/00/01/eerste-vierdaagse-van-nijmegen /historie/1909/09/01/eerste-vierdaagse-van-nijmegen permanent;
rewrite ^/historie/1909/index.html /historie/1909 permanent;
rewrite ^/historie/1944/00/05/dolle-dinsdag /historie/1944/09/05/dolle-dinsdag permanent;

#remove stupid kalenders
#rewrite ^/kalender/0 /kalender permanent;
#rewrite ^/kalender/1 /kalender permanent;
#rewrite ^/kalender/2 /kalender permanent;
#rewrite ^/kalender/3 /kalender permanent;
#rewrite ^/kalender/4 /kalender permanent;
#rewrite ^/kalender/5 /kalender permanent;
#rewrite ^/kalender/6 /kalender permanent;
#rewrite ^/kalender/7 /kalender permanent;
#rewrite ^/kalender/8 /kalender permanent;
#rewrite ^/kalender/9 /kalender permanent;
#rewrite ^/kalender/10 /kalender permanent;
#rewrite ^/kalender/11 /kalender permanent;
#rewrite ^/kalender/12 /kalender permanent;
#rewrite ^/kalender/13 /kalender permanent;
#rewrite ^/kalender/14 /kalender permanent;
#rewrite ^/kalender/15 /kalender permanent;
#rewrite ^/kalender/16 /kalender permanent;
#rewrite ^/kalender/17 /kalender permanent;
#rewrite ^/kalender/18 /kalender permanent;
#rewrite ^/kalender/19 /kalender permanent;
#rewrite ^/kalender/20 /kalender permanent;
#rewrite ^/kalender/21 /kalender permanent;
#rewrite ^/kalender/22 /kalender permanent;
#rewrite ^/kalender/23 /kalender permanent;
#rewrite ^/kalender/24 /kalender permanent;
###rewrite ^/kalender/25 /kalender permanent;
#rewrite ^/kalender/26 /kalender permanent;
#rewrite ^/kalender/27 /kalender permanent;
#rewrite ^/kalender/28 /kalender permanent;
#rewrite ^/kalender/29 /kalender permanent;
#rewrite ^/kalender/30 /kalender permanent;

#historie - by year


#historie - year/month


#historie - full date
rewrite ^/histories/historie/1945/05/05 /historie/1945/05/05 permanent;
rewrite ^/histories/historie/2007/07/25 /historie/2007/07/25 permanent;
rewrite ^/histories/historie/1959/08/21 /historie/1959/08/21 permanent;
rewrite ^/histories/historie/1921/07/29 /historie/1921/07/29 permanent;
rewrite ^/histories/historie/1909/09/01 /historie/1909/09/01 permanent;
rewrite ^/histories/historie/1675/08/01 /historie/1675/08/01 permanent;
rewrite ^/histories/historie/1909/03/31 /historie/1909/03/31 permanent;


#Corrected URLs
rewrite ^/historie/1940/05/14/bombardement%20-rotterdam /historie/1940/05/14/bombardement-rotterdam permanent;
rewrite ^/historie/1940/05/14/bombardement20-rotterdam /historie/1940/05/14/bombardement-rotterdam permanent;

#Alle zeven op een rijtje
rewrite ^/watis/maandag /alle-zeven-op-een-rijtje/maandag permanent;
rewrite ^/watis/dinsdag /alle-zeven-op-een-rijtje/dinsdag permanent;
rewrite ^/watis/woensdag /alle-zeven-op-een-rijtje/woensdag permanent;
rewrite ^/watis/donderdag /alle-zeven-op-een-rijtje/donderdag permanent;
rewrite ^/watis/vrijdag /alle-zeven-op-een-rijtje/vrijdag permanent;
rewrite ^/watis/zaterdag /alle-zeven-op-een-rijtje/zaterdag permanent;
rewrite ^/watis/zondag /alle-zeven-op-een-rijtje/zondag permanent;
rewrite ^/watis/weekday /alle-zeven-op-een-rijtje permanent;
 */