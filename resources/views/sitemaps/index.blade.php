<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

   <url>

      <loc>{{ route('pages.index') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>

   <url>

      <loc>{{ route('pages.homeopathy') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.schussler') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url> 
   
   <url>

      <loc>{{ route('pages.services') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('pages.contact') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   
   <url>

      <loc>{{ route('blogs.index') }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>


    @foreach ($blogs as $blog)
   <url>

   <loc>{{ route('blogs.show', $blog->slug) }}</loc>

      <lastmod>{{ $now }}</lastmod>

      <changefreq>monthly</changefreq>

      <priority>0.9</priority>

   </url>
   @endforeach

</urlset>
