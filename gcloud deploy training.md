gcloud projects create testmyhosting-425 --set-as-default
gcloud projects describe [YOUR_PROJECT_ID]
gcloud app create --project=testmyhosting-425
region : [6] europe-west
git clone -b phase0-helloworld https://github.com/GoogleCloudPlatform/appengine-php-guestbook.git helloworld
cd helloworld
dev_appserver.py app.yaml
gcloud components update
http://localhost:8080/
gcloud app deploy
https://testmyhosting-425.appspot.com
