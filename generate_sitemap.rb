require 'sitemap_generator'

SitemapGenerator::Sitemap.default_host = "https://rivieradiulisseindanza.com"

SitemapGenerator::Sitemap.public_path = './'
SitemapGenerator::Sitemap.create_index = false

SitemapGenerator::Sitemap.create do
  add '/', changefreq: 'weekly', priority: 1.0
  add '/chi-siamo.html', changefreq: 'monthly'
  add '/corsi.html', changefreq: 'weekly'
  add '/contatti.html', changefreq: 'monthly'
end
