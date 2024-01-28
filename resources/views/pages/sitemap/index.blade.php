<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{env('APP_URL', '')}}/about/resume</loc>
        <lastmod><?php echo date('Y-m-d')?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{env('APP_URL', '')}}/browser-games/list</loc>
        <lastmod><?php echo date('Y-m-d')?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{env('APP_URL', '')}}/browser-games/snake</loc>
        <lastmod><?php echo date('Y-m-d')?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{env('APP_URL', '')}}/browser-games/tetris</loc>
        <lastmod><?php echo date('Y-m-d')?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
