from django.forms import ModelForm, Textarea
from reviews.models import Review

class ReviewForm(ModelForm):  ## django 에서 제공하는 forms 양식/기능 사용
  class Meta:
    model = Review
    fields = ['user_name', 'rating', 'comment']
    widgets = {
      'comment': Textarea(attrs={'cols': 40, 'rows': 15}),
    }
    