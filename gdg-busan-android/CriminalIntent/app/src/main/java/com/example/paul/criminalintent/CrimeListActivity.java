package com.example.paul.criminalintent;

import android.support.v4.app.Fragment;

/**
 * Created by PAUL on 2016-09-02.
 */
public class CrimeListActivity extends SingleFragmentActivity {
    @Override
    protected Fragment createFragment() {
        return new CrimeListFragment();
    }
}
