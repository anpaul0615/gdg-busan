from django.shortcuts import render
from django.views.generic import ListView, DetailView
from django.views.generic import ArchiveIndexView,YearArchiveView, MonthArchiveView, ArchiveIndexView, DayArchiveView, TodayArchiveView

from blog.models import Post

# Create your views here.
class PostLV(ListView):
    model = Post
    template_name = 'blog/post_all.html'
    context_object_name = 'posts'
    paginate_by = 2

class PostDV(DetailView):
    model = Post

class PostAV(ArchiveIndexView):
    model = Post
    date_field = 'modify_date'

class PostYAV(YearArchiveView):
    model = Post
    date_field = 'modify_date'
    make_object_list = True

class PostMAV(MonthArchiveView):
    model = Post
    date_field = 'modify_date'
    month_format = '%m'

class PostDAV(DayArchiveView):
    model = Post
    date_field = 'modify_date'
    month_format = '%m'

class PostTAV(TodayArchiveView):
    model = Post
    date_field = 'modify_date'
