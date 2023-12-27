from django.conf.urls import url
from django.conf.urls import include
from django.contrib import admin
from django.conf.urls.static import static
from django.conf import settings

from .views import HomeView

urlpatterns = [
    url(r'^$', HomeView.as_view(), name='home'),

    url(r'^admin/', admin.site.urls),

    url(r'^bookmark/', include('bookmark.urls', namespace='bookmark')),
    url(r'^blog/', include('blog.urls', namespace='blog')),
    url(r'^photo/', include('photo.urls', namespace='photo')),

] + static(settings.MEDIA_URL, document_root = settings.MEDIA_ROOT)
