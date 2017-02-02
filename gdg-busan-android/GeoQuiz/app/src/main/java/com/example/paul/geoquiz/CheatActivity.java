package com.example.paul.geoquiz;

import android.animation.Animator;
import android.animation.AnimatorListenerAdapter;
import android.app.Activity;
import android.content.Intent;
import android.os.Build;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.ViewAnimationUtils;
import android.widget.Button;
import android.widget.TextView;

public class CheatActivity extends AppCompatActivity {

    private TextView    mAnswerTextView;
    private Button      mShowAnswer;

    private boolean    mAnswerIsTrue;

    private static String KEY_SHOWN = "shown";
    private boolean    mIsAnswerShown;

    private TextView mVersionTextView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cheat);
        mAnswerIsTrue = getIntent().getBooleanExtra(QuizActivity.EXTRA_ANSWER_IS_TRUE, false);

        if(savedInstanceState != null){
            this.mIsAnswerShown = savedInstanceState.getBoolean(KEY_SHOWN, false);
            setAnswerShownResult();
        }

        mAnswerTextView = (TextView) findViewById(R.id.answer_text_view);
        mShowAnswer = (Button) findViewById(R.id.show_answer_button);
        mShowAnswer.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (mAnswerIsTrue){
                    mAnswerTextView.setText(R.string.true_button);
                } else {
                    mAnswerTextView.setText(R.string.false_button);
                }

                CheatActivity.this.mIsAnswerShown = true;
                setAnswerShownResult();

                if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.LOLLIPOP){
                    int cx = mShowAnswer.getWidth() / 2;
                    int cy = mShowAnswer.getHeight() / 2;
                    float radius = mShowAnswer.getWidth();
                    Animator anim = ViewAnimationUtils.createCircularReveal(mShowAnswer, cx, cy, radius, 0);
                    anim.addListener(new AnimatorListenerAdapter() {
                        @Override
                        public void onAnimationEnd(Animator animation) {
                            super.onAnimationEnd(animation);
                            mShowAnswer.setVisibility(View.INVISIBLE);
                        }
                    });
                }else{
                    mShowAnswer.setVisibility(View.INVISIBLE);
                }

            }
        });

        mVersionTextView = (TextView) findViewById(R.id.version_text_view);
        mVersionTextView.setText("API 레벨 " + Build.VERSION.SDK_INT );

    }

    // Set Intent Result
    private void setAnswerShownResult(){
        Intent data = new Intent();
        data.putExtra(QuizActivity.EXTRA_ANSWER_SHOWN, this.mIsAnswerShown);
        setResult(Activity.RESULT_OK, data);
    }

    // Save Bundle
    @Override
    protected void onSaveInstanceState(Bundle outState) {
        super.onSaveInstanceState(outState);
        outState.putBoolean(KEY_SHOWN, this.mIsAnswerShown);
    }

}