from django.shortcuts import render

from django.views.generic import ListView, DetailView
from bookmark.models import Bookmark

# Create your views here.

# list view
class BookmarkLV(ListView):
  model = Bookmark

# detail view
class BookmarkDV(DetailView):
  model = Bookmark
