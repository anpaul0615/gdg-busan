package com.example.paul.geoquiz;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;

public class QuizActivity extends AppCompatActivity {

    private Button mTrueButton;
    private Button mFalseButton;
    private ImageButton mNextButton;
    private ImageButton mPrevButton;
    private TextView mQuestionTextView;

    private int mCurrentIndex = 0;

    private Question[] mQuestionsBank = new Question[] {
            new Question(R.string.question_oceans, true),
            new Question(R.string.question_mideast, true),
            new Question(R.string.question_africa, true),
            new Question(R.string.question_americas, true),
            new Question(R.string.question_asia, true)
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Log.d(TAG, "onCreate() called");

        setContentView(R.layout.activity_quiz);

        // @ 문제뷰어
        mQuestionTextView = (TextView) findViewById(R.id.question_text_view);
        int question = mQuestionsBank[mCurrentIndex].getTextResId();
        mQuestionTextView.setText(question);

        // @ next 버튼
        mNextButton = (ImageButton) findViewById(R.id.next_button);
        mNextButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                mCurrentIndex = (mCurrentIndex + 1) % mQuestionsBank.length;
                updateQuestion();
            }
        });
        // @ prev 버튼
        mPrevButton = (ImageButton) findViewById(R.id.prev_button);
        mPrevButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                mCurrentIndex = (mCurrentIndex - 1 + mQuestionsBank.length) % mQuestionsBank.length;
                updateQuestion();
            }
        });
        // @ true, false 버튼
        mTrueButton = (Button) findViewById(R.id.true_button);
        mTrueButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                checkAnswer(true);
            }
        });
        mFalseButton = (Button) findViewById(R.id.false_button);
        mFalseButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                checkAnswer(false);
            }
        });
    }

    private void updateQuestion(){
        int question = mQuestionsBank[mCurrentIndex].getTextResId();
        mQuestionTextView.setText(question);
    }
    private void checkAnswer(boolean userPressedTrue){
        boolean answerIsTrue = mQuestionsBank[mCurrentIndex].isAnswerTrue();
        int messageResId = 0;

        if (userPressedTrue == answerIsTrue){
            messageResId = R.string.correct_toast;
        }else{
            messageResId = R.string.incorrect_toast;
        }
        Toast.makeText(QuizActivity.this, messageResId, Toast.LENGTH_SHORT).show();
        //Toast.makeText(getApplicationContext(), messageResId, Toast.LENGTH_SHORT).show();
    }


    private static final String TAG = "QuizActivity";
    @Override
    protected void onStart() {
        super.onStart();
        Log.d(TAG, "onStart() called");
    }
    @Override
    protected void onPause() {
        super.onPause();
        Log.d(TAG, "onPause() called");
    }
    @Override
    protected void onResume() {
        super.onResume();
        Log.d(TAG, "onResume() called");
    }
    @Override
    protected void onStop() {
        super.onStop();
        Log.d(TAG, "onStop() called");
    }
    @Override
    protected void onDestroy() {
        super.onDestroy();
        Log.d(TAG, "onDestroy() called");
    }
}
