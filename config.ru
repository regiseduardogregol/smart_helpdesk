require 'rack/rewrite'
#
# deploy a static page on heroku
# ------------------------------
#
#
# required site structure:
#
#   name-of-site
#   |- config.ru
#   +- public
#      |- index.html
#      |- css
#      |- js
#      +- images
#
#
#
# deployment:
#
#   git init
#   ...
#   heroku create <name-of-site>
#   git push heroku master
#
#


use Rack::Static,
  :root => "public"

run lambda { |env|
  [
    200, 
    {
      'Content-Type'  => 'text/html', 
      'Cache-Control' => 'public, max-age=86400' 
    },
    File.open('public/index.php', File::RDONLY)
  ]
}

use Rack::Rewrite do
  rewrite "/", "/index.php"
end

run Rack::File.new("public")

