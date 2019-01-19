from django.urls import path
from . import views

app_name = 'reviews'

urlpatterns = [
    path('', views.index, name='Index'),
    path('registration', views.register, name='Registration'),
    path('login', views.user_login, name='Login'),
    path('logout', views.user_logout, name='Logout'),
]