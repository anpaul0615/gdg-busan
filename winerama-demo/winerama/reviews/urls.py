from django.urls import path
from . import views

app_name = 'reviews'  ## ??

urlpatterns = [
  path('', views.review_list, name='review_list'),
  path('<int:review_id>/', views.review_detail, name='review_detail'),
  path('wines/', views.wine_list, name='wine_list'), 
  path('wines/<int:wine_id>/', views.wine_detail, name='wine_detail'),
  path('wines/<int:wine_id>/new/', views.add_review, name='add_review'),
]
