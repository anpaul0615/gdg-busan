from django.shortcuts import render
from django.views.generic import ListView, DetailView, TemplateView
from django.views.generic.dates import ArchiveIndexView
from django.views.generic.dates import YearArchiveView, MonthArchiveView, DayArchiveView, TodayArchiveView


from .models import Post
from tagging.models import Tag, TaggedItem
from tagging.views import TaggedObjectList

# Create your views here.
#-- ListView
class PostLV(ListView) :
  model = Post
  template_name = 'blog/post_all.html'
  context_object_name = 'posts'
  paginate_by = 2

#-- DetailView
class PostDV(DetailView) :
  model = Post

#-- ArchiveView
class PostAV(ArchiveIndexView) :
  model = Post
  date_field = 'modify_date'
  month_format = '%m'

class PostYAV(YearArchiveView) :
  model = Post
  date_field = 'modify_date'
  make_object_list =True
  month_format = '%m'

class PostMAV(MonthArchiveView) :
  model = Post
  date_field = 'modify_date'
  month_format = '%m'

class PostDAV(DayArchiveView) :
  model = Post
  date_field = 'modify_date'
  month_format = '%m'

class PostTAV(TodayArchiveView) :
  model = Post
  date_field = 'modify_date'
  month_format = '%m'


#--- TemplateView
class TagTV(TemplateView) :
  template_name = 'tagging/tagging_cloud.html'

class PostTOL(TaggedObjectList):
  model = Post
  template_name = 'tagging/tagging_post_list.html'